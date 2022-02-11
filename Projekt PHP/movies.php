<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="kaka.php?type=add">Lägg till</a>
    <a href="kaka.php?type=show&kat=komedi">Komedi</a>
    <a href="kaka.php?type=show&kat=action">Action</a>
    
    <?php
    include_once 'functions.php';


    if ($_GET) {
        $type = $_GET['type'];

        if ($type == "add") {
            showForm();
        }

        if ($type == "show") {
            $kat = $_GET['kat'];
            listMovies($kat);
        }
    }

    if ($_POST) {
        addMovie($title, $kat, $grade);
    }

    ?>
</body>
</html>