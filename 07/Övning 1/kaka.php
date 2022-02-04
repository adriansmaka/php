<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kaka.php" method="get">
        <button type="submit" name="btn">Radera datan</button>
    </form>

    <?php
    
    if(isset($_GET['btn'])) {
        $file = "data.txt";
        if(file_exists($file)) {
            if (!unlink($file)) {
                echo "<p>File \"$file\" could not be deleted.</p>";
            } else {
                echo "<p>File \"$file\" deleted succesfully.</p>";
            }
        } else {
            echo "<p>Filen finns inte än</p>";
        }
    }

    /*
        //Prints file.
        if ($f = file($file)) {
            echo "<p>The content of the file is the following:</p>";
            //echo "<pre>";
            //print_r($f);
            //echo "</pre>";
    
            foreach ($f as $v) {
                $x  = explode('|', $v);
                //print_r($x);
                echo "<p>$x[0] har betyget $x[1]</p>";
            }
        }
        */
    ?>
</body>
</html>