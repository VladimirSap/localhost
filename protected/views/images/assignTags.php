<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/start/jquery-ui.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="../css/tables.css"/>

<h3> Отметьте теги, которые хотите назначить или снять с выбранных изображений. </h3>
<p>
    <em>
        Внимание! Отображаются все существующие теги, не зависимо от того, назначены ли они изображениям.
    </em>
</p>
<table style="border: 1px solid black; border-collapse: collapse">
    <tr>
        <th></th>
        <th>ID</th>
        <th>Тег</th>
    </tr>

    <?php
    foreach($allTags as $id=>$tag) {
        echo '<tr>';
        echo '<td width="1%" > <input type="checkbox"/> </td>';
        echo '<td>'. $id .'</td>';
        echo '<td>'. $tag .'</td>';
        echo '</tr>';
    }
?>

</table>

<input type="button" value="Назначить теги" name="assignTags" onclick="assignTags()"/>
<input type="button" value="Снять теги" name="assignTags" onclick="removeTags()"/>

<script src="../js/checkboxTable.js" type="text/javascript"></script>

<script>

    function changeTagSet(toAssign) {

        var tagsIds = selectedId.join('|');
        if (tagsIds == '') {
            alert ("Не выбрано ни одного тега");
        } else {
            var nextLocation = "index.php?r=images/ChangeTagSet&tagsIds=" + tagsIds +
            "&toAssign=" + toAssign;

            window.location = nextLocation;
        }
    }

    function assignTags() { changeTagSet(1); }
    function removeTags() { changeTagSet(0); }

</script>
