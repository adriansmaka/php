<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            background-color: YellowGreen;

            margin: 0;
            min-height: 100vh;
        }

        .result {
            font-size: 20px;
        }

        .form__input {
            margin: 10px;
            width: 200px;
        }

        .form__input label {
            display: block;
            padding-bottom: 2px;
        }
        
        .form__input input {
            width: 100%;
        }

        button {
            margin: 10px;
        }
    </style>
</head>
<div class="wrapper">
<body>
    <h1>Skolmaten</h1>
    <form action="skolmatidag.php" method="post">
        <div class="form__input">
            <label for="namn">Maten:</label>
            <input type="text" name="namn" id="namn" required>
            <label for="betyg">Betyg:</label>
            <input type="text" name="betyg" id="betyg" min="1" max="5" required>
        </div>
        <button type="submit">Skicka</button>
    </form>
<?php

    //setlocale(LC_TIME, "sv_SE");
    $file = "data.txt";

    if ($_POST) {
        $namn = $_POST["namn"];
        $betyg = $_POST["betyg"];
        if (empty($namn) or empty($betyg)) {
            header('location: skolmatidag.php');
        }

    $text = "$namn|$betyg\n";
    $ftext = filter_var($text, FILTER_SANITIZE_STRING);

    //Checks if file exists.
    if (file_exists($file)) {
        //echo "The file exists.<br>";
        //Writes on file.
        if (file_put_contents($file, $ftext, FILE_APPEND)) {
            echo "Datan sparades korrekt. <br>";
        } else {
            echo "Kunde inte skriva datan i filen. <br>";
        }
        //Prints file.
        if ($f = file($file)) {

            foreach ($f as $v) {
                $x  = explode('|', $v);
                //print_r($x);
                //echo "Du matade in måltiden <p>$x[0] med betyget $x[1]</p>";
            }
        }
    } else {
        //echo "Filen fanns inte och har nu skapats.<br>";
        fopen($file, "w+");
        if (file_put_contents($file, $ftext, FILE_APPEND)) {
            echo "Datan sparades korrekt. <br>";
        } else {
            echo "Error. <br>";
        }
        //Prints file.
        if ($f = file($file)) {

            foreach ($f as $v) {
                $x  = explode('|', $v);
                //print_r($x);
                echo "<p>$x[0] har betyget $x[1]</p>";
            }
        }
    }
}

/* if (file_exists($file)) { 
    print_r($file);
} */

//Date print.
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
</body>
</html>
