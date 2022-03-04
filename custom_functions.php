<?php

function custom_mb_ucfirst($string)
        {
            $first = mb_strtoupper(mb_substr($string, 0, 1));
            $rest = mb_strtolower(mb_substr($string, 1));
            $fullstring = $first.$rest;
            return $fullstring;
        }

        function array_search_partial($arr, $keyword) 
        {
            foreach($arr as $index => $string) {
                if (strpos($string, $keyword) !== FALSE) {
                    return $index;
                } else {
                    echo "Error";
                }
            }
        }
        
        $array = ['apple', 'orange', 'pineapple'];
        // search
        $res = array_search_partial($array, 'app');
        if (is_int($res)) {
            echo "is int";
        } else {
            echo "isnt int";
        }

?>