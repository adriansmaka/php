<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logg.php" method="post">
        <button type="submit" name="btn">Logga mig nu</button>
    </form>
<?php
    $loggar = "loggar.txt";
    if($_POST) {
        $btn = $_POST['btn'];
        //File existence check.
        if(file_exists($loggar)) {
            //Button call function.
            if(isset($btn)) {
                $text = date("Y-m-d, H:i:s");
                $filter = filter_var($text, FILTER_SANITIZE_STRING);
                $text = $filter. "\n";
                //File writing check.
                if (file_put_contents($loggar, $text, FILE_APPEND)) {
                    echo "<p>Du har nu loggat in.</p>";
                    //File content print.
                    if ($f = file($loggar)) {
                        //print_r($f);

                    }
                } else {
                    //echo "<p>file_put_contents append didnt work :(</p>";
                }
            }
        } else {
            echo "<p>Filen finns inte i databasen. Kör sidan om för att skapa den.</p>";
            fopen($loggar, "w+");
        }
    }
?>
</body>
</html>