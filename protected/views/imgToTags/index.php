<?php
/* @var $this ImgToTagsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Img To Tags',
);

$this->menu=array(
	array('label'=>'Create ImgToTags', 'url'=>array('create')),
	array('label'=>'Manage ImgToTags', 'url'=>array('admin')),
);
?>

<h1>Img To Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
