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
    $in = "550";
    $mod = $in % 100;
    $ut = $in - $mod;
    /* $ut = (int)$ut; */
    $antal = $ut / 100;
    $antal = (int)$antal;
    echo "<p>Uttagsautomat - Hundralappar</p> <p>Inmatat: $in, uttag: $ut ($antal hundralappar)</p>";
    ?>
</body>
</html>