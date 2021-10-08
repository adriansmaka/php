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
    $dag = 2;
    switch ($dag) {
        case "1":
            $result = "Måndag";
            break;
        case "2":
            $result = "Tisdag"; 
            break;
        case "3":
            $result = "Onsdag";
            break;
        case "4":
            $result = "Torsdag";
            break;
        case "5":
            $result = "Fredag";
            break;
        case "6":
            $result = "Lördag";
            break;
        case "7":
            $result = "Söndag";
            break;
        default:
            echo "Värden finns inte";
            break;
    }
    echo $result
    ?>
</body>
</html>