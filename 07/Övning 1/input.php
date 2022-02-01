<?php

    setlocale(LC_TIME, "sv_SE");

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

$today = getdate();
foreach ($today as $key => $value) {
    if ($key == "mday" or $key == "month" or $key == "year") {
        if ($value <= 31 and (is_numeric($value) == True)) {
            $mday = $value;
        } if ($value > 31 and (is_numeric($value) == True)) {
            $year = $value;
        } if (is_string($value) == True) { //Fixa det här, hämta månad från tal till sträng!
            $mon = $value;
        }
    }
}

echo "<p>$mday $mon $year</p>";

$m_numtostr = array(
    1 => "Januari",
    "Februari",
    "Mars",
    "April",
    "Maj",
    "Juni",
    "Juli",
    "Augusti",
    "September",
    "Oktober",
    "November",
    "December"
    )


?>