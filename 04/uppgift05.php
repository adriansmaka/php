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
<body>
<div class="wrapper">
        <form action="uppgift05.php" method="get">
            <div class="form__input">
                <label for="num">Skriv tal:</label>
                <input type="number" name="num" id="num" step="1" min="0" required>
            </div>

            <button type="submit">Print</button>
        </form>

        <?php
        if ($_GET) {
            $number = $_GET["num"];
            if (empty($number)) {
                header('location: uppgift05.php');
            }else {
                switch ($number) {
                    case "1":
                        $result = "Ett";
                        break;
                    case "2":
                        $result = "Två";
                        break;
                    case "3":
                        $result = "Tre";
                        break;
                    case "4":
                        $result = "Fyra";
                        break;
                    case "5":
                        $result = "Fem";
                        break;
                    case "6":
                        $result = "Sex";
                        break;
                    case "7":
                        $result = "Sju";
                        break;
                    case "8":
                        $result = "Åtta";
                        break;
                    case "9":
                        $result = "Nio";
                        break;
                    case "10":
                        $result = "Tio";
                        break;
                    default:
                        $result =  $number;
                        break;
                        }
                    echo $result;
                    }
                }
        ?>
    </div>
</body>
</html>