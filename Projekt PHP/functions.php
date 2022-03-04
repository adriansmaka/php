<?php

function showForm()
{
    echo "<div class=\"mid\">";
    
    echo "<h1>Lägg till ny film:</h1>";
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


function array_search_partial($arr, $keyword) {
    foreach($arr as $index => $string) {
        if (strpos($string, $keyword) !== FALSE)
            return $index;
    }
}


function listMovies($kat)
{
$mvin = "movieinfo.txt";

if ($kat == "hem") {
    echo "<div class=\"mid\">";
    echo "<h1>Välkommen till webbsidan</h1>";
    echo "<ul>";
    echo "<li><p>På sidan \"Ny\" visas den nyaste filmen.</p></li>";
    echo "<li><p>På sidan \"Alla\" visas alla filmer, dess titel, kategori och betyg.</p></li>";
    echo "<li><p>På sidan \"Kategorier\" visas endast filmer av vald kategori.</p></li>";
    echo "<li><p>På sidan \"Lägg till\" kan man lägga till nya filmer.</p></li>";
    echo "</ul>";
    echo "</div>";
} elseif ($kat == "ny") {
    //Visa alla filmer
    if (file_exists($mvin)) {
        if (filesize($mvin) == 0) {
            echo "<div class=\"tables\">";
            echo "<p>Det finns ingen film i databasen.</p>";
        } elseif ($f = file($mvin)) {
            $lastkey = array_key_last($f);
            $lastval = ($f[$lastkey]);
            $x  = explode('|', $lastval);
            $upper_kat = custom_mb_ucfirst($x[1]);

                    echo "<div class=\"tables\">";
                    echo "<h1>Senast inlagt film:</h1>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Titel</th>";
                    echo "<th>Kategori</th>";
                    echo "<th>Betyg</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>$x[0]</td>";
                    echo "<td>$upper_kat</td>";
                    echo "<td>$x[2]</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "</div>";
                }
        } else {
            echo "Filen $mvin kunde inte hittas.";
        }
        

} elseif ($kat == "alla") {
    //Visa alla filmer
    if (file_exists($mvin)) {
        if (filesize($mvin) == 0) {
            echo "<div class=\"tables\">";
            echo "<p>Det finns ingen film i databasen.</p>";
        } elseif ($f = file($mvin)) {
            echo "<div class=\"tables\">";
            echo "<h1>Alla filmer i databasen:</h1>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Titel</th>";
            echo "<th>Kategori</th>";
            echo "<th>Betyg</th>";
            echo "</tr>";

            foreach ($f as $val) {
                $x  = explode('|', $val);
                $upper_kat = custom_mb_ucfirst($x[1]);
                    
                    echo "<tr>";
                    echo "<td>$x[0]</td>";
                    echo "<td>$upper_kat</td>";
                    echo "<td>$x[2]</td>";
                    echo "</tr>";
                }
                echo "</div>";
                echo "</table>";
                }
        } else {
            echo "Filen $mvin kunde inte hittas.";
        }


} elseif ($kat == "komedi") {
    //Visa filmer i komedi
    if (file_exists($mvin)) {
        if (filesize($mvin) == 0) {
            echo "<div class=\"tables\">";
            echo "<p>Det finns ingen film i databasen.</p>";
        } elseif ($f = file($mvin)) {
            /*
            echo "<pre>";
            print_r($f);
            echo "</pre>";
            */

            if (is_int(array_search_partial($f, $kat))) {
                echo "<div class=\"tables\">";
                echo "<h1>Alla filmer i $kat:</h1>";
                echo "<table>";
                echo "<tr>";
                echo "<th>Titel</th>";
                echo "<th>Betyg</th>";
                echo "</tr>";
                foreach ($f as $val) {
                    $x  = explode('|', $val);
                    if ($x[1] == "komedi") {
                    //echo "<pre>";
                    //print_r($x);
                //echo "</pre>";
                    /*
                    echo "<pre>";
                    print_r($x);
                    echo "</pre>";
                    */
                    
                    echo "<tr>";
                    echo "<td>$x[0]</td>";
                    echo "<td>$x[2]</td>";
                    echo "</tr>";
                    }
                }
            } else {
                //echo "not found";
                echo "<div class=\"tables\">";
                echo "<p>Det finns inga filmer med kategori $kat.</p>";
            }
        }
        echo "</table>";
        echo "</div>";
        } else {
            echo "Filen $mvin kunde inte hittas.";
            }




} elseif ($kat == "action") {
    //Visa filmer i action
    if (file_exists($mvin)) {
        if (filesize($mvin) == 0) {
            echo "<div class=\"tables\">";
            echo "<p>Det finns ingen film i databasen.</p>";
        } elseif ($f = file($mvin)) {
            if (is_int(array_search_partial($f, $kat))) {
            echo "<div class=\"tables\">";
            echo "<h1>Alla filmer i action:</h1>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Titel</th>";
            echo "<th>Betyg</th>";
            echo "</tr>";
            foreach ($f as $val) {
                $x  = explode('|', $val);
                if ($x[1] == "action") {

                    /*
                    echo "<pre>";
                    print_r($x);
                    echo "</pre>";
                    */
                    echo "<tr>";
                    echo "<td>$x[0]</td>";
                    echo "<td>$x[2]</td>";
                    echo "</tr>";
                    }
                }
            } else {
            echo "<div class=\"tables\">";
            echo "<p>Det finns inga filmer med kategori $kat.</p>";
            echo "</table>";
            echo "</div>";
        }
        }   
    } else {
        echo "Filen $mvin kunde inte hittas.";
    }
}

} //Slut av funktionen listMovies.


function custom_mb_ucfirst($string)
    {
        $first = mb_strtoupper(mb_substr($string, 0, 1));
        $rest = mb_strtolower(mb_substr($string, 1));
        $fullstring = $first.$rest;
        return $fullstring;
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
            echo "<div class=\"mid\">";
            echo "<p>Filmen har lagts till.</p><br>";
            echo "</div>";
        } else {
            echo "<div class=\"mid\">";
            echo "<p>Filmen kunde ej läggas till.<p><br>";
            echo "</div>";
        }
        
        if ($f = file($mvin)) {
            foreach($f as $val) {
                $x  = explode('|', $val);
                //print_r($x);
                //echo "<p>$x[0] $x[1] $x[2]<br></p>";
                if ($value = "action") {
                    //echo "film med kat action hittat<br>";
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