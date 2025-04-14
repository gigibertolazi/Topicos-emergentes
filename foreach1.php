<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php
    $vet1= range(0,12);
    foreach($vet1 as $vet)
    echo "$vet\n";
    
    ?>
    <br><br>

    <?php
    $vet2= range (0,100,10);
    foreach($vet2 as $vet)
    echo "$vet\n";
    ?>
    <br><br>
    
    <?php
    $vet3= range ('a', 'i');
    foreach($vet3 as $vet)
    echo "$vet\n";
    ?>

    <br><br>

    <?php
    $vet4= range ('e', 'a');
    foreach($vet4 as $vet)
    echo "$vet\n";
    ?>


</body>
</html>