<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $land = array(
            "sodermanland" => array(
                "Nyköping" => 33454, 
                "Trosa" => 5689
            ),
            "ostergotland" => array("Linköping", "Motala", "Norrköping")
        );


        foreach ($land as $landskap => $städer) {
            echo "<h2>$landskap</h2>";
            
            foreach ($städer as $stad => $invånare) {
                echo "<p>$stad = $invånare</p>";
            }
        }
    ?>
</body>
</html>