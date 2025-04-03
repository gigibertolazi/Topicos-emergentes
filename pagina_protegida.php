<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site pipipipopopo</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <?php
    $usuario= $_POST["usuario"];
    $senha= $_POST["senha"];

    if($usuario == "Gigi_Bertolazi" && $senha == 123456){
        echo "Seja bem-vindo(a) a Página protegida!";
    }else{
        echo "Parece que algo deu errado. Verifique se o usuário e senha estão corretos e tente novamente.";
    }
    ?>

    
</body>
</html>