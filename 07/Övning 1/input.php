<?php
    $file = "data.txt";
    $text = "This is a test.";
    $ftext = filter_var($text, FILTER_SANITIZE_STRING);
    if (file_put_contents($file, $ftext)) {
        echo "Data successfully written. <br>";
    } else {
        echo "Error. <br>";
    }

    if (file_exists($file)) {
        echo "The file exists.";
    } else {
        echo "The file does NOT exist.";
    }

    if ($f = file($file)) {
        echo "<p>The content of the file is the following:</p>";
        print_r($f);
    }
?>