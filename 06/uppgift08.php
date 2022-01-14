<?php
    $numbers = array(4, 1, 2, -3, 4);

    #print_r($numbers);

    function minimum($numbers)
    {

        $minvalue = $numbers[0];

        foreach ($numbers as $value) {
            if ($value < $minvalue) {
                $minvalue = $value;
            } 
        }
        echo $minvalue;
    }
    minimum($numbers);
?>