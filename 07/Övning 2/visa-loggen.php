<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loggade tidpunkter</h1>
    <?php
    $loggar = "loggar.txt";
    if (file_exists($loggar)) {
        if ($f = file($loggar)) {
            foreach ($f as $v) {
                $x  = explode('|', $v);
                //print_r($x);
                
                echo "<ul>";
                echo "<li>$x[0]</li>";
                echo "</ul>";
                
            }
        }
    } else {
        echo "Filen finns inte.";
    }
    ?>
</body>
</html>