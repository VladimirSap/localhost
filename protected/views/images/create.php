<?php
/* @var $this ImagesController */
/* @var $model Images */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Images', 'url'=>array('index')),
	array('label'=>'Manage Images', 'url'=>array('admin')),
);
?>

<h1>Create Images</h1>

<?php

//$this->renderPartial('_form', array('model'=>$model));

$form = $this->beginWidget(
    'CActiveForm',
    array(
        'id' => 'upload-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )
);
echo $form->labelEx($model, 'image');
echo $form->fileField($model, 'image');
echo $form->error($model, 'image');

echo CHtml::submitButton('Submit');
$this->endWidget();

?>


