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
    </style>
</head>
<div class="wrapper">
<body>
    <h1>Numeric value checker</h1>
    <form action="uppgift01.php" method="get">
        <div class="form__input">
            <label for="val">Write value:</label>
            <input type="text" name="val" id="val" required>
        </div>
        <button type="submit">Check</button>
    </form>
</body>
</html>

<?php

if ($_GET) {
    $val = $_GET["val"];
    if (empty($val)) {
        header('location: uppgift01.php');
    }elseif (is_numeric($val)) {
        echo "The value is certainly numeric.";
    }else {
        echo "The value is not numeric.";
    }
}

?>
</div>