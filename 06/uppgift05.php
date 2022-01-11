<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            /* justify-content: center;
            align-items: center;
            flex-direction: column; */
            background-color: YellowGreen;

            margin: 0;
            min-height: 100vh;
        }

        .result {
            font-size: 20px;
        }

        .form__input {
            margin: 10px;
            width: 200px;
        }

        .form__input label {
            display: block;
            padding-bottom: 2px;
        }
        
        .form__input input {
            width: 100%;
        }

        button {
            margin: 10px;
        }
        
        .resultat {
            background-color: #b0b;
            margin: 10px;
        }
    </style>
</head>
<div class="wrapper">
<body>
    <h1>Name fixer?</h1>
    <form action="uppgift05.php" method="get">
        <div class="form__input">
            <label for="text">Write a full name:</label>
            <input type="name" name="name" id="input" placeholder="Name and surname"></input>
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>

    <?php
        if ($_GET) {
            $name = $_GET["name"];
        $fixed = mb_convert_case($name, MB_CASE_TITLE,"UTF-8");
        echo $fixed;
        } 
    ?>