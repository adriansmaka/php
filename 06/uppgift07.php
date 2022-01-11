<?php

function summa($array)
{
    foreach ($array as $value) {
        if (is_numeric($value)) {
            $total = array_sum($array);
        }
    }
    echo "Summan är $total" ;
}