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
    if ($_GET) {
        //print_r($_GET);

        $number1 = $_GET["n1"];
        $number2 = $_GET["n2"];
        if (empty($number1) or empty($number2)) {
            header('location: uppgift03a.php');
        } else {
            echo $number1 + $number2;
        }
    } else {
        header('location: uppgift03a.php');
    }
    ?>
</body>
</html>