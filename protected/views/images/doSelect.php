<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/start/jquery-ui.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js" type="text/javascript"></script>
<script src="../js/jquery.ui-contextmenu.js" type="text/javascript"></script>
<script src="../js/contextMenu.js" type="text/javascript"></script>

<link rel="stylesheet" href="../css/tables.css"/>

<?php
/* @var $this ImagesController */
/* @var $model Images */

// Меню-"адресная строка"
$this->breadcrumbs=array(
    'Images'=>array('index'),
    $images->id,
);

$this->menu=array(
    array('label'=>'List Images', 'url'=>array('index')),
    array('label'=>'Create Images', 'url'=>array('create')),
    array('label'=>'Update Images', 'url'=>array('update', 'id'=>$images->id)),
    array('label'=>'Delete Images', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$images->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Images', 'url'=>array('admin')),
    array('label'=>'Images tags', 'url'=>array('tags/index')),

);
?>

<h4>Выделите изображения, вызовите контекстное меню, выберите действие.</h4>

<table class="hasmenu" style="border: 1px solid black; border-collapse: collapse">
<tr>
    <th></th>
    <th>ID</th>
    <th>Название</th>
    <th>Назначенные теги</th>
</tr>

<?php
foreach($images as $row) {
    echo '<tr>';
    echo '<td width="1%" > <input type="checkbox"/> </td>';
    echo '<td>'. $row->getAttribute("id") .'</td>';
    echo '<td>'. $row->getAttribute("link") .'</td>';

    $tags = $assignedTags[$row->getAttribute("id")];
    if (trim($tags) == '') {$tags = "тегов нет"; }

    echo '<td>' . $tags . '</td>';
    echo '</tr>';
}
echo '</table>';

?>
<script src="../js/checkboxTable.js" type="text/javascript"></script>

