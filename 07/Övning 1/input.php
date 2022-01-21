<?php
    require_once("input.html");
    if ($_GET) {
        $mat = $_GET["mat"];
        $betyg = $_GET["betyg"];
        $dag = $_GET["dag"];

        function custom_mb_ucfirst($string)
        {
            $first = mb_strtoupper(mb_substr($string, 0, 1));
            $rest = mb_strtolower(mb_substr($string, 1));
            $fullstring = $first.$rest;
            return $fullstring;
        }

        if (empty($mat) and empty($betyg)) {
            header("location: input.php");
        } else {
            echo "<h3> Omdömen har skickats! </h3>";

            /* TEST */
            $a = custom_mb_ucfirst($mat);
            echo "<p><b> Rätten: </b> $a</p> <p><b>Betyg:</b> $betyg </p>";
        }
    }
?>

<!-- Mat idag, betyg 1-5 -->