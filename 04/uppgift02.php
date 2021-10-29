<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        Name: <input type="text" name="name">
        <p>Surname: <input type="text" name="surname"></p>
        <p><input type="submit" value="Submit details"></p>
    <?php
    if ($_GET) {
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        if (empty($name) or empty($surname)) {
            header('location: uppgift02.html');
        } else {
            echo "Hello $name $surname";
        }
    } else {
        header('location: uppgift02.html');
    }
    ?>
</body>
</html>