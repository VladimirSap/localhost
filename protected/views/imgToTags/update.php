<?php
/* @var $this ImgToTagsController */
/* @var $model ImgToTags */

$this->breadcrumbs=array(
	'Img To Tags'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ImgToTags', 'url'=>array('index')),
	array('label'=>'Create ImgToTags', 'url'=>array('create')),
	array('label'=>'View ImgToTags', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ImgToTags', 'url'=>array('admin')),
);
?>

<h1>Update ImgToTags <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>