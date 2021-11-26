<?php
    $text = "Lorem ipsum"; #11
    $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, reiciendis!"; #82
    if (!$_GET) {
        if (strlen($text) > 45) {
            $short = substr($text, 0, 30);
            echo $short;
            echo "<a href=?read=all>Läs mer</a>";
        } else {
            echo $text;
        }
    }
    
    if ($_GET) {
        echo $text;
        echo "<a href='uppgift06.php'>Dölj</a>";
    }
?>