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
    <h1>Randtext</h1>
    <form action="uppgift07.php" method="get">
        <div class="form__input">
            <label for="text">Write text:</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    if ($_GET) {
        $text = trim($_GET["text"]);
    $explist = explode(" ", $text);
    foreach ($explist as $value) {
        $r = mt_rand(1, 3);
        if ($r == 1) {
                echo "<sub>". $value. "</sub>";
        } 
        elseif ($r== 2) {
                echo "<sup>". $value. "</sup>";
        }
        else {
                echo $value;
        }
    }
}
   // print_r($explist);

?>