<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* <!---Write styles here---> */
        body {
            display: grid;
            /* justify-items: center; */
            grid-template-rows: auto 1fr;
            min-height: 100vh;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            margin: 20px 100px;
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }

        form {
            /* background-color: #b0b; */
            display: grid;
            align-items: end;
            justify-content: center;
        }
        p {
            display: grid;
            justify-content: center;
            margin: 4px 0px 0px 4px;
            /* background-color: red; */
        }

        button {
            /* align-self: end; */
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <?php
    $file = "data.txt";
    if(file_exists($file)) {
        if ($f = file($file)) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Måltid</th>";
            echo "<th>Betyg</th>";
            echo "<th>Datum</th>";
            echo "</tr>";
            foreach ($f as $v) {
                $x  = explode('|', $v);

                echo "<tr>";
                echo "<td>$x[0]</td>";
                echo "<td>$x[1]</td>";
                echo "<td>placeholder</td>";
                echo "</tr>";
            } 
        }
    } else {
        echo "<p>Det finns ingen data än</p>";
    }
    echo "</table>";

    /*
        //Prints file.
        if ($f = file($file)) {
            echo "<p>The content of the file is the following:</p>";
            //echo "<pre>";
            //print_r($f);
            //echo "</pre>";
    
            foreach ($f as $v) {
                $x  = explode('|', $v);
                //print_r($x);
                echo "<p>$x[0] har betyget $x[1]</p>";
            }   
        }
        */
    ?>
    <form action="skolmaten.php" method="post">
        <button type="submit" name="btn">Radera datan</button>
    </form>
    <?php
        if($_POST) {
            $btn = $_POST['btn'];
            if(file_exists($file)) {
                if(isset($btn)) {
                    (unlink($file));
                    echo "<p>File \"$file\" deleted succesfully.</p>";
                    //header("location: skolmaten.php");
                }
            } else {
                    echo "<p>File \"$file\" could not be deleted.</p>";
                }
        }
?>
    </body>
</html>

