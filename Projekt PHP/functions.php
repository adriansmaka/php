<?php

function showForm()
{
    //echo "visa formulär";
    echo "<div class=\"mid\">";
    
    echo "<h1>Lägg till ny film</h1>";
    echo "<form action=\"movies.php\" method=\"post\">";

    echo "<p>";
    echo "<label for=\"titel\">Titel: </label>";
    echo "<input type=\"text\" id=\"titel\" name=\"titel\"><br>";
    echo "</p>";
    
    echo "<p>";
    echo "<label for= \"kategori \">Välj kategori: </label>";
    echo "<select name=\"kategori\" id=\"kategori\">";
    //Placeholder för select.
    echo "<option value=\"\" disabled selected> </option>";
    echo "<option value=\"kategori\">Action</option>";
    echo "<option value=\"kategori\">Komedi</option>";
    echo "</select>";
    echo "</p>";
    
    echo "<p>";
    echo "<label for=\"betyg\">Betyg (1-5): </label>";
    echo "<input type=\"number\" id=\"betyg\" name=\"betyg\" min=\"1\" max=\"5\"><br>";
    echo "</p>";
    
    echo "<button type=\"submit\" name=\"btn\">Lägg till</button>";
    echo "</form>";

    echo "</div";

} 

function listMovies($kat)
{
    echo "visa alla filmer i $kat";
}

function addMovie($title, $kat, $grade)
{
    
}
/*

//echo "<label for=\"kategori\">Kategori: </label>";
echo "<input type=\"checkbox\" id=\"komedi\" name=\"komedi\">";
echo "<label for=\"komedi\"> Komedi</label><br>";
echo "<input type=\"checkbox\" id=\"action\" name=\"action\">";
echo "<label for=\"action\"> Action</label><br>";
//echo "<label for=\"kategori\"> Action</label><br>";

*/