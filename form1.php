<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar respostas</title>
</head>
<body>
    <?php
    $nome= $_POST["nome"];
    $idade= $_POST["idade"];
    $endereco= $_POST["endereco"];
    $sexo= $_POST["opcao"];
    
    if($idade >= '18'){
        echo "Seu nome é $nome e você tem $idade anos. Seu endereço é $endereco e você se identifica como sendo do sexo $sexo";
    }else if($idade < '18'){
        echo "Seu nome é $nome e você é menor de idade";
    }

    
    ?>
</body>
</html>