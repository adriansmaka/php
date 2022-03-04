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
        
        .tables {
            display: grid;
            place-items: center;
            text-align: center;
        }
        
        a {
            padding: 0px 4px 0px 4px;
        }
        
        table {
            border-collapse: collapse;
            min-width: 60%;
            margin: 10px;
        }
        
        th, td {
            border: 1px solid #000;
            padding: 5px;
        }

    </style>
</head>
<body>
    <div class="nav">
        <a href="movies.php?type=show&kat=hem">Hem</a>
        <a href="movies.php?type=show&kat=alla">Alla</a>
        <a href="movies.php?type=show&kat=komedi">Komedi</a>
        <a href="movies.php?type=show&kat=action">Action</a>
        <a href="movies.php?type=add">Lägg till</a>
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
        $titel = $_POST["titel"];
        $kat = $_POST["kat"];
        $bet = $_POST["bet"];
        addMovie($titel, $kat, $bet);
    }

    ?>
</body>
</html>