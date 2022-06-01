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
    include "connector.php";

    $sql = "SELECT * FROM kategorier";
    $resultat = $mysqli->query($sql);
    $antal = $resultat->num_rows;

    if ($antal == 0) {
        echo "Inga kategorier funna.";
    } else {
        while ($rad = $resultat->fetch_assoc()) {
            echo "<h2>" .$rad['kategori'] ."</h2>";

            /* ******************************************** */
            $sql2 = "SELECT * FROM medlemmar WHERE kategori='" .$rad['id'] ."'";
            $resultat2 = $mysqli->query($sql2);
            $antal2 = $resultat2->num_rows;  
            
            if ($antal2 == 0) {
                echo "Snablars otur, inga medlemmar här";
            } else {
                echo "<ul>";
                while ($radkat = $resultat2->fetch_assoc()) {
                    //print_r($radkat);
                    echo "<li>" .$radkat['fnamn'] ." " .$radkat['enamn'] ."</li>";
                }
                echo "</ul>";
            }
            /* ******************************************** */
        }
        $resultat2->free();
    }
    $resultat->free();
    $mysqli->close();
    ?>
</body>
</html>