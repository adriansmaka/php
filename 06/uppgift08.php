<?php
    $numbers = array(1, 2, 3);

    function minimum($numbers)
    {

        $minvalue = $numbers[0];

        foreach ($numbers as $value) {
            if ($value < $minvalue) {
                $minvalue = $value;
                echo $minvalue;
            }
        }
    }
    minimum($numbers)
?>