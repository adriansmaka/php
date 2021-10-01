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
    $summa1 = 22.4;
    $summa2 = 22.5;
    $summa3 = 22.6;

    /* int() typomvandlar float till int och kapar alla decimaler
    utan att avrunda */

    $betala1 = $summa1 + 0.5; // 22.9
    $betala1 = (int)$betala1; // Kapar bort alla decimaler -> 22
    echo "<p>$betala1</p>\n";

    $betala2 = $summa2 + 0.5; // 23.00
    $betala2 = (int)$betala2; // Kapar bort alla decimaler -> 23
    echo "<p>$betala2</p>";

    $betala3 = $summa3 + 0.5; // 23.10
    $betala3 = (int)$betala3; // Kapar bort alla decimaler -> 23
    echo "<p>$betala3</p>";




/*     $betala1 = round($summa1);
    echo "22.4 avrundas till $betala1\n";
    $betala2 = round($summa2);
    echo "22.5 avrundas till $betala2\n";
    $betala3 = round($summa3);
    echo "22.6 avrundas till $betala3"; */
    ?>
</body>
</html>