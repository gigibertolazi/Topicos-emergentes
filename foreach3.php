<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de convidados</title>
</head>
<body>
    <form method="POST" action="foreach3.php">
        Insira um convidado:
        <input type="text" name="convidado">
        <input type="submit" name="Enviar" value="Adicionar">
        <input type="submit" name="Remover" value="Retirar">


    </form>

    <?php
    session_start();
    
    if(!isset($_SESSION['convidado'])) {
        $_SESSION['convidado']= [];
    }

    if(isset($_POST["Enviar"])) {
        $nome = $_POST["convidado"];
        
        array_push($_SESSION['convidado'], $nome);

        foreach ($_SESSION['convidado'] as $i => $valor) {
            echo "($i) - $valor <br>";
        }
    }

    if (isset($_POST['Remover'])) {
        array_pop($_SESSION['convidado']);

        foreach ($_SESSION['convidado'] as $i => $valor) {
            echo "($i) - $valor <br>";
        }
    }



    
    
    
    ?>
</body>
</html>