<?php

/**
 * This is the model class for table "imgToTags".
 *
 * The followings are the available columns in table 'imgToTags':
 * @property integer $id
 * @property integer $img_id
 * @property integer $tag_id
 */
class ImgToTags extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imgToTags';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('img_id, tag_id', 'required'),
			array('img_id, tag_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, img_id, tag_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'img_id' => 'Img',
			'tag_id' => 'Tag',
		);
	}

    public function test() {
        return 'myTest';
    }

    public function getTagsById($id) {
        $query = Yii::app()->db->createCommand()
            ->select('t.name, t.id')
            ->from('tags t')
            ->join('imgToTags it','t.id = it.tag_id')
            ->where('img_id=:id', array(':id'=>$id))
            ->queryAll();

        return $query;

    }

    public function deleteByTagsAndImgIds($imgId, $tagId) {
        $command = Yii::app()->db->createCommand();
        $command->delete($this->tableName(),
            'img_id=:imgId and tag_id=:tagId',
            array(':imgId'=>$imgId, ':tagId'=>$tagId));

        return $command;
    }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('img_id',$this->img_id);
		$criteria->compare('tag_id',$this->tag_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ImgToTags the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
