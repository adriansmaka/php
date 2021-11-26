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
    <h1>Text splitter</h1>
    <form action="uppgift05.php" method="get">
        <div class="form__input">
            <label for="name">Write text:</label>
            <input type="name" name="name" id="name" placeholder="Write here" required>
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    if ($_GET) {
        $name = trim($_GET["name"]);
        if (empty($name)) {
            header('location: uppgift05.php');
        }else {
            $res = str_split($name);
            foreach($res as $key => $value)
                echo str_repeat($value. " ", $key + 1). "<br>";
        }
    }
?>