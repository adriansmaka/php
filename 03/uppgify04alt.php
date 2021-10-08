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
    $dag = 1;
    $lista = array(1=>"Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
    switch ($dag) {
        case $dag:
            $result = $lista[$dag];
            break;
        default:
            $result = "error";
            break;
    }
    echo $result
    ?>
</body>
</html>