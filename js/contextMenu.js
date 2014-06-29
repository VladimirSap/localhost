    $(function() {
        $(document).contextmenu({
            delegate: ".hasmenu",
            menu: [
                {title: "Изменить теги",
                    action: function(event, ui) {
                        var ids = selectedId.join('|');

                        if (ids == '') alert ("Не выбрано ни одного изображения");
                        else window.location = "index.php?r=images/ShowTagsToChange&ids=" + ids;
                    }
                }
            ]
        });
    });