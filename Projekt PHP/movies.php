<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>

        .mid {
            display: grid;
            place-items: center;
        }

        .nav {
            display: flex;
            justify-content: space-evenly;
            border-style: solid;
            padding: 6px;
        }

        a {
            padding: 0px 4px 0px 4px;
        }

    </style>
</head>
<body>
    <div class="nav">
        <a href="movies.php?type=add">Lägg till</a>
        <a href="movies.php?type=show&kat=komedi">Komedi</a>
        <a href="movies.php?type=show&kat=action">Action</a>
    </div>

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
        addMovie($titel, $kat, $bet);
    }

    ?>
</body>
</html>