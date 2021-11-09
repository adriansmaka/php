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
            font-size: 1px;
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
<body>
    <div class="wrapper">
        <form action="uppgift04.php" method="get">
            <div class="form__input">
                <label for="n1">Number 1:</label>
                <input type="number" name="n1" id="n1" step="1" min="0" max="10" required>
            </div>

            <div class="form__input">
                <label for="n2">Number 2:</label>
                <input type="number" name="n2" id="n2"  step="1" min="0" max="10">
            </div>

            <button type="submit">Sum 'em up</button>
        </form>

        <?php
        if ($_GET) {
            $number1 = $_GET["n1"];
            $number2 = $_GET["n2"];
            if (empty($number1) or empty($number2)) {
                header('location: uppgift04.php');
            } elseif ($number1 < $number2){
                $result =  "$number1 (Number 1) is the smallest number.";
            } elseif ($number1 > $number2) {
                $result=  "$number2 (Number 2) is the smallest number.";
            } else {
                $result = "Both numbers are equals.";
                
            }

            echo "<p class=\"result\">$result</p>";
        }
        ?>
    </div>
</body>
</html>