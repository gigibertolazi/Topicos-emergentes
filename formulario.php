<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome e idade</title>
</head>
<body>
    <?php
    $_txtnome= $_GET["txtnome"];
    $_idade= $_GET["idade"];
    echo "Seu nome é: $_txtnome\n";

    echo "e você tem $_idade anos";

    
    ?>
</body>
</html>