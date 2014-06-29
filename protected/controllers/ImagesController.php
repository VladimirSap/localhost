<?php

class ImagesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'ImgTagList', 'ShowTagsToChange', 'ChangeTagSet'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */

    public function actionImgTagList() {

        $images = $this->doSelect();

        $assignedTags = array();
        $imgToTags = new imgToTags();

        $imgTagArray = array();
        foreach($images as $row) {
            $id = $row->getAttribute("id");

            $tags = '';

            $tagIdArray = array();
            foreach($imgToTags->getTagsById($id) as $tag) {
                $tagIdArray[] = $tag['id'];
                // Строчка с именами тегов для вывода в таблицу.
                // Используется только для демонстрации админу инфы
                // об ассоциированных тегах
                $tags .= $tag['name'] . ' ';
            }

            $imgTagArray[$id] = $tagIdArray;
            $assignedTags[$id] = $tags;
        }

        // Записываем результаты обращения к базе для
        // последующего использования в других методах,
        // чтобы повторно к базе не обращаться.
        $_SESSION['imgTagSet'] = $imgTagArray;

        // Отрисовываем получившийся результат
        $this->render('doSelect',array(
            'images'=>$images, 'assignedTags'=>$assignedTags)
        );
    }

    public function doSelect() {
        $model=Images::model()->findAll();
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

	public function actionCreate()
	{
		$model=new Images;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Images']))
		{
			$model->attributes=$_POST['Images'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    public function actionShowTagsToChange($ids) {
        // получить ID изображений, теги которых будут изменяться
        $imgIds = explode("|", $ids);

        $_SESSION['imgIds'] = $imgIds;

        // Вывести форму со всеми возможными тегами
        $tags = new Tags();

        $this->render('assignTags', array(
            'allTags'=>$tags->getAsArray()));

    }

    public function actionChangeTagSet($tagsIds, $toAssign) {
        $tagsIds = explode('|', $tagsIds);

        // Читаем id изображений, которые были переданы ранее
        $imgIds = $_SESSION['imgIds'];
        // Читаем информацию о том, какие теги каким изображениям назначены
        $imgTagSet = $_SESSION['imgTagSet'];


        // Работаем с каждым ранее выделенным изображением
        foreach($imgIds as $imgId) {
            $tagSet = $imgTagSet[$imgId];

            foreach($tagsIds as $tagId) {
                $imgToTags = new imgToTags();
                // Проверяем, есть ли уже такой тег у изображения
                $isTag = in_array($tagId, $tagSet);
                // Если идет операция ассоциирования тега и такого тега еще нет
                if($toAssign && !$isTag) {
                    $imgToTags->attributes =
                        array('id'=>null,'img_id'=>$imgId, 'tag_id'=>$tagId);
                    // ассоциировать новый тег с фоткой
                    if (!$imgToTags->save()) {
                        echo "Ошибка операции ассоциирования тега.";
                        echo "Тег $tagId не ассоциирован с изображением $imgId";
                    }
                } else if(!$toAssign && $isTag) {
                    // удалить ассоциацию с тегом
                    if (!$imgToTags->deleteByTagsAndImgIds($imgId, $tagId)) {
                        echo "Ошибка операции снятия тега.";
                        echo "Тег $tagId не снят с изображения $imgId";
                    }
                }
            } // закончили перебирать отмеченные теги для выбранной фотки
        } // закончили перебирать фотки

        $this->actionImgTagList();
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Images']))
		{
			$model->attributes=$_POST['Images'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Images');

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

		$model=new Images('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Images']))
			$model->attributes=$_GET['Images'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Images the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Images::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Images $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='images-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
