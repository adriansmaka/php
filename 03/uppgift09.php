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
        $list = array("Audi", "Mercedes", "Fiat", "Saab");
        foreach ($list as $value) {
            echo $value ."<br>";
        }
    ?>
</body>
</html>