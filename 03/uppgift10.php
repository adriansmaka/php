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
        $garage = array(1=>"Audi", "Mercedes", "Fiat", "Saab");
            foreach ($garage as $key => $value) {
                echo "<strong>$value:</strong> Plats nr. $key" ."<br>";
            }
    ?>
</body>
</html>