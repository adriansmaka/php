<?php
function allMovies()
{
    echo "Call to allMovies function.<br>";
}





function showForm()
{
    echo "<div class=\"mid\">";
    
    echo "<h1>Lägg till ny film</h1>";
    echo "<form action=\"movies.php\" method=\"post\">";
    
    echo "<p>";
    echo "<label for=\"titel\">Titel: </label>";
    echo "<input type=\"text\" id=\"titel\" name=\"titel\"><br>";
    echo "</p>";
    
    echo "<p>";
    echo "<label for= \"kat \">Välj kategori: </label>";
    echo "<select name=\"kat\" id=\"kat\">";
    //Placeholder för select.
    echo "<option value=\"\" disabled selected> </option>";
    echo "<option value=\"action\">Action</option>";
    echo "<option value=\"komedi\">Komedi</option>";
    echo "</select>";
    echo "</p>";
    
    echo "<p>";
    echo "<label for=\"bet\">Betyg (1-5): </label>";
    echo "<input type=\"number\" id=\"bet\" name=\"bet\" min=\"1\" max=\"5\"><br>";
    echo "</p>";
    
    echo "<button type=\"submit\" name=\"btn\">Lägg till</button>";
    echo "</form>";
    
    echo "</div>";
} 





function listMovies($kat)
{
    $mvin = "movieinfo.txt";

    if ($kat == "komedi") {
        //Visa filmer i komedi
        if (file_exists($mvin)) {
            if ($f = file($mvin)) {
                foreach ($f as $val) {
                    $x  = explode('|', $val);
                    //echo "<pre>";
                    //print_r($x);
                    //echo "</pre>";
                    if ($x[1] == "komedi") {
                        /*
                        echo "<pre>";
                        print_r($x);
                        echo "</pre>";
                        */
                        
                        echo "<div class=\"tables\">";
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Titel</th>";
                        echo "<th>Betyg</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>$x[0]</td>";
                        echo "<td>$x[2]</td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "</div>";
                        
                    }
                }
            }
        } else {
            echo "Filen $mvin finns inte.";
        }
    } elseif ($kat == "action") {
        //Visa filmer i action
    }
    //echo "visa alla filmer i $kat";
}





function addMovie($titel, $kat, $bet)
{
    $mvin = "movieinfo.txt";

    if (file_exists($mvin)) {
        $titel_filter = filter_var($titel, FILTER_SANITIZE_STRING);
        $kat_filter = filter_var($kat, FILTER_SANITIZE_STRING);
        $bet_filter = filter_var($bet, FILTER_SANITIZE_STRING);

        $txt = $titel_filter .'|' .$kat_filter .'|' .$bet_filter ."\n";

        if (file_put_contents($mvin, $txt, FILE_APPEND)) {
            echo "det fungerade att skriva till filen<br>";
        } else {
            echo "det fungerade inte att skriva till filen<br>";
        }
        
        if ($f = file($mvin)) {
            foreach($f as $val) {
                $x  = explode('|', $val);
                print_r($x);
                //echo "<p>$x[0] $x[1] $x[2]<br></p>";
                if ($value = "action") {
                    echo "film med kat action hittat<br>";
                }
            }
        }
    } else {
        fopen($mvin, "w+");
        $titel_filter = filter_var($titel, FILTER_SANITIZE_STRING);
        $kat_filter = filter_var($kat, FILTER_SANITIZE_STRING);
        $bet_filter = filter_var($bet, FILTER_SANITIZE_STRING);

        $txt = $titel_filter .'|' .$kat_filter .'|' .$bet_filter ."\n";

        if (file_put_contents($mvin, $txt, FILE_APPEND)) {
            echo "det fungerade att skriva till filen<br>";
        } else {
            echo "det fungerade inte att skriva till filen<br>";
        }
        
        if ($f = file($mvin)) {
            foreach($f as $val) {
                $x  = explode('|', $val);
                print_r($x);
                //echo "<p>$x[0] $x[1] $x[2]<br></p>";
                if ($value = "action") {
                    echo "film med kat action hittat<br>";
                }
            }
        }
    }
    //echo "skriven titel $titel, kategori $kat, betyg $bet<br>";
}

/*

//echo "<label for=\"kategori\">Kategori: </label>";
echo "<input type=\"checkbox\" id=\"komedi\" name=\"komedi\">";
echo "<label for=\"komedi\"> Komedi</label><br>";
echo "<input type=\"checkbox\" id=\"action\" name=\"action\">";
echo "<label for=\"action\"> Action</label><br>";
//echo "<label for=\"kategori\"> Action</label><br>";

*/