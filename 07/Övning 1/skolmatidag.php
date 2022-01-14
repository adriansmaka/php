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
        <form action="skolmatidag.php" method="get">
            <div class="form__input">

                <h1>Skolmaten</h1>

                <label for="mat">Måltiden:</label>
                <input type="text" name="mat" id="mat" placeholder="Vad var det för mat idag?" required>

                <label for="betyg">Betyget:</label>
                <input type="number" name="betyg" id="betyg" min="1" max="5" placeholder="Sätt betyg från 1 till 5." required>

                <!-- FOR TESTING! -->
                <label for="dag">Välj ett dag:</label>
                <select name="dag" id="dag" required>
                    <option value="" disabled selected>Välj dagen</option>
                    <option value="måndag">Måndag</option>
                    <option value="tisdag">Tisdag</option>
                    <option value="onsdag">Onsdag</option>
                    <option value="torsdag">Torsdag</option>
                    <option value="fredag">Fredag</option>
                </select>

            </div>
            <button type="submit">Skicka omdömen</button>
        </form>
</body>
</html>

<?php
    if ($_GET) {
        $mat = $_GET["mat"];
        $betyg = $_GET["betyg"];
        if (empty($mat) and empty($betyg)) {
            header("location: skolmatidag.php");
        } else {
            echo "Omdömen har skickats";
        }
    }
?>

<!-- Mat idag, betyg 1-5 -->