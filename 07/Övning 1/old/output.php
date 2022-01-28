<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skol mat idag</title>

    <style> 
        body {
            display: grid;
            place-items: center;
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
            margin-bottom: 14px;
        }

        button {
            margin: 0 10px 10px 10px;
        }
    </style>
</head>
<body>
    <?php
    
    echo "<table>";
    echo "<th>Mat</th>";
    echo "<th>Betyg</th></tr>";
    echo "</table>";
    ?>
</body>
</html>