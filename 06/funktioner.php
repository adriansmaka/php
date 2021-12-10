<?php
function halflt($number)
{
    if (is_numeric($number)) {
        $number = (int)$number;
        if (is_int($number)) {
            $res = sprintf("%01.2f", $number / 2);
        }
    } else {
        $res = "Please input an integer.";
    }
    echo "<div class='resultat'>" .$res ."</div>";
}
?>