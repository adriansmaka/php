<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tal1 = 10;
    $tal2 = 20;
    $printout = "Den största talet är ";
    if ($tal1 > $tal2) {
        echo "$printout $tal1";
    }
    else {
        echo $printout .$tal2;
        
    }
    ?>
</body>
</html>