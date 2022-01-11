<?php
    $array = array("ett", "två", "tre");

    function echo_array($array)
    {
        foreach ($array as $value) {
            echo $value ."<br>";
        }
    }
    echo_array($array)
?>
