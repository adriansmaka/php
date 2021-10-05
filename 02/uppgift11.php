<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p>Mät in antal inmatade pengar <br><input></p> -->
    <?php
    $in = "1750";
    $mod = $in % 100;
    $ut = $in - $mod;
    $n500 = $in / 500;
    $n500 = (int)$n500;
    $n500mod = $in % 500;
    $n100 = $n500mod / 100;
    $n100 = (int)$n100;
    echo "<p>Uttagsautomat</p> <p>Inmatat: $in, uttag: $ut</p> $n500 500-lappar och $n100 100-lappar";
    ?>
</body>
</html>