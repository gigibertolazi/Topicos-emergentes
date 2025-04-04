<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $nota= $_POST["semestreNota"];
    $notaExame= (50-(6*$nota))/4;

    if($nota >= 7){
        echo "Parabéns! Você está aprovado e não precisa realizar o exame :D";
    }elseif($nota <= 1.7){
        echo "Infelizmente você reprovou e não poderá fazer o exame :(";
    }else{
        echo "Infelizmente você reprovou, mas está apto a fazer o exame! Sua nota necessária para passar é $notaExame, bons estudos!";
    }
    
    
    ?>
</body>
</html>