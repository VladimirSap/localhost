<?php
/* @var $this ImgToTagsController */
/* @var $model ImgToTags */

$this->breadcrumbs=array(
	'Img To Tags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImgToTags', 'url'=>array('index')),
	array('label'=>'Manage ImgToTags', 'url'=>array('admin')),
);
?>

<h1>Create ImgToTags</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>