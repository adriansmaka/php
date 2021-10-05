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
    $tal = 20;
    $tal = (int)$tal;
    if ($tal > 10) {
        echo "Din variabel är <strong>större</strong> än 10, nämligen $tal.";
    }
    else {
        echo "Din variabel är <strong>mindre</strong> än 10, nämligen $tal.";
    }
    ?>
</body>
</html>