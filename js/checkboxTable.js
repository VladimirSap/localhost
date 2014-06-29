checkboxes = $("input:checkbox");

    var selectedId = [];

    for (var i = 0; i < checkboxes.length; i++) {
        var checkbox = checkboxes[i];
        checkbox.onclick = function() {
            var currentRow = this.parentNode.parentNode;
            var secondColumn = currentRow.getElementsByTagName("td")[1];

            var id = secondColumn.textContent;
            if ($(this).is(":checked")){
                selectedId.push(id);
            } else {
                selectedId = jQuery.grep(selectedId, function(value) {
                    return value != id;
                });
            }
        };
    }