<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    include "connector.php";

    $sql = "SELECT medlemmar.fnamn, medlemmar.enamn, kategorier.kategori "
            . "FROM medlemmar INNER JOIN kategorier ON "
            . "medlemmar.kategori=kategorier.id ORDER BY medlemmar.id DESC";
    $resultat = $mysqli->query($sql);
    $antal = $resultat->num_rows;

    if ($antal == 0) {
        echo "<p>Inga medlemmar funna.</p>";
    } else {
        while ($rad = $resultat->fetch_assoc()) {
            echo "<ul>". "<li>".$rad["fnamn"]. " ".$rad["enamn"]. " - " .$rad["kategori"]."</li>" ."</ul>";
        }   
    }
    
    $resultat->free();
    $mysqli->close();
    ?>
</body>
</html>