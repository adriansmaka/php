<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benkes filmbibliotek</title>
    <style>
        /* Bakgrundsfärg */
        body {
            background-color: YellowGreen;
        }

        /* Klass för att centrera objekt */
        .mid {
            display: grid;
            place-items: center;
            align-content: center;
        }
        
        /* Klass för att navbaren */
        .nav {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            border-style: solid;
            padding: 6px;
            background-color: lightgreen;
        }
        
        /* Klass för tabeller */
        .tables {
            display: grid;
            place-items: center;
            text-align: center;
        }
        
        a {
            padding: 0px 0px 0px 0px;
            text-decoration: none;
        }
        
        table {
            border-collapse: collapse;
            min-width: 60%;
            margin: 10px;
            background-color: lightgreen;
        }
        
        th, td {
            border: 1px solid #000;
            padding: 5px;
        }
        
        button {
            font-size: 14px;
        }

        /* Klasser för dropwdownen på kategorier*/
        
        /* "Kategorier" knapp */
        .dropbtn {
            padding: 2px 6px;
            border: 0.01em solid transparent;
            cursor: pointer;
            color: black;
            text-decoration: none;
            background-color: lightgreen;
            }

        /* Dropdown-låda */
        .dropdown {
            position: relative;
            display: inline-block;
            }

        /* Innehåll i dropdown-lådan */
        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            text-align: center;
            background-color: lightgreen;
            }

            
        .dropdown-content a {
            color: black;
            padding: 4px 4px;
            text-decoration: none;
            display: block;
            border-style: dashed;
            border-width: 0.12em 0.12em 0em 0.12em;
            margin: 0px 0px;
            }

            .dropdown-content a:nth-last-child(1) {
                border-bottom: 0.12em dashed;
            }

            .dropdown-content a:nth-child(1) {
                margin-top: 1px;
            }

            
        .dropdown-content a:hover {
            background-color: #829eb5;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            }

        .dropdown:hover .dropbtn {
            border: 0.01em solid;
            }

    </style>
</head>
<body>
    <div class="nav">
        <a href="movies.php?type=show&kat=hem">Hem</a>
        <a href="movies.php?type=show&kat=ny">Ny</a>
        <a href="movies.php?type=show&kat=alla">Alla</a>

        <div class="dropdown">
            <button class="dropbtn">Kategorier</button>
            <div class="dropdown-content">
                <a href="movies.php?type=show&kat=komedi">Komedi</a>
                <a href="movies.php?type=show&kat=action">Action</a>
            </div>
        </div>

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