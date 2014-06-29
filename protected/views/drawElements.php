<?php
class DrawElements {

    public static function select($name, $array, $already) {

        $assigned = array();
        foreach($already as $value) {
            $assigned[] = $value['name'];
        }

        $notAssigned = array();

        //if (!empty($already)) {
            foreach($array as $value) {
                if(!in_array($value, $assigned)) {
                    $notAssigned [] = $value;
                }
            }
        //}

        echo '<select name="' . $name . '">';
            foreach($notAssigned as $value) {
                echo '<option>';
                echo $value;
                echo '</option>';
            }
        echo '</select>';
    }
}