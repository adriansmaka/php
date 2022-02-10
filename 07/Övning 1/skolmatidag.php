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
            <input type="number" name="betyg" id="betyg" min="1" max="5" required>
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
    
    //Date print start.
    $today = getdate();
    foreach ($today as $key => $value) {
        if ($key == "wday") { 
            switch ($value) {
                case 0:
                    $value = "Söndag";
                    break;
                case 1:
                    $value = "Måndag";
                    break;
                case 2:
                    $value = "Tisdag";
                    break;
                case 3:
                    $value = "Onsdag";
                    break;
                case 4:
                    $value = "Torsdag";
                    break;
                case 5:
                    $value = "Fredag";
                    break;
                case 6:
                    $value = "Lördag";
                    break;
            }
            $wday = $value;
            //echo $wday;
        }
        if ($key == "mday") { 
            $mday = $value;
            //echo $mday; 
        }
        if ($key == "mon") { 
            switch ($value) {
                case 1:
                    $value = "Januari";
                    break;
                case 2:
                    $value = "Februari";
                    break;
                case 3:
                    $value = "Mars";
                    break;
                case 4:
                    $value = "April";
                    break;
                case 5:
                    $value = "Maj";
                    break;
                case 6:
                    $value = "Juni";
                    break;
                case 7:
                    $value = "Juli";
                    break;
                case 8:
                    $value = "Augusti";
                    break;
                case 9:
                    $value = "September";
                    break;
                case 10:
                    $value = "Oktober";
                    break;
                case 11:
                    $value = "November";
                    break;
                case 12:
                    $value = "December";
                    break;
            }
            $mon = $value;
            //echo $mon;
        }
        if ($key == "year") {
            $year = $value;
            //echo $year;
        }
    }
    //echo "<p>$wday $mday $mon $year</p>";
    //Date print end.

    $text = "$namn|$betyg|$mday $mon $year\n";
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
                //echo "<br>";
                echo "<p>$x[0] med betyget $x[1] och datum $x[2]</p>";
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
/*
        //Prints file.
        if ($f = file($file)) {

            foreach ($f as $v) {
                $x  = explode('|', $v);
                //print_r($x);
                //echo "<p>$x[0] har betyget $x[1]</p>";
            }
        }
        */
    }
}

/* if (file_exists($file)) { 
    print_r($file);
} */


/*
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
*/
?>
</body>
</html>
