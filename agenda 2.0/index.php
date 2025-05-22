<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="salvar.php">
        <div>
            <h1>Exemplo - Agenda</h1>
        </div>

    <div>
        <label for="nome">Nome: </label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="endereco">Endereço: </label>
        <br>
        <input type="text" name="endereco"> 
        <br><br>
        <label class="form-label" for="telefone">Telefone: </label>
        <br>
        <input type="text" name="telefone" maxlength="15" onkeyup="maskTelefone(this)" placeholder="(  ) _____-____">
        <br><br>
        <button type="submit">Cadastrar</button>
    </div>
    </form>
    <br>

    <h3>Lista:</h3>
    <h5>Nome - Endereço - Telefone</h5>
    
    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome'] . " - " . $linha['endereco'] . " - " . $linha['telefone'] . " | <a href= 'editar.php?id=" . $linha["id"] . "'>Editar</a>" . " - <a href= 'excluir.php?id=" . $linha["id"] . "'>Excluir</a> <br>";
        }
    } else {
        echo "Nenhum contato encontrado.";
    }
    ?>

    <script>
        function maskTelefone(input){
            var telefone = input.value.replace(/\D/g, '');

            telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3');

            input.value = telefone;

        }
    </script>

    
</body>
</html>