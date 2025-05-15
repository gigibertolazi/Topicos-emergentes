<?php

include('conexao.php');

if (isset($_GET['id'])){
    $id= $_GET['id'];

    $sql = "SELECT * FROM contatos WHERE id = $id";

    $res = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($res) == 1){
        $contato = mysqli_fetch_assoc($res);
    }else{
        echo "Contato não encontrado.";
        exit;
    }
}

if(isset($_POST['atualizar'])){

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql2 = "UPDATE contatos SET nome='$nome', endereco= '$endereco' , telefone='$telefone' WHERE id=$id";

    if (mysqli_query($conexao, $sql2)){
        echo "Contato atualizado com sucesso!";
        echo "<br> <a href='index.php'>Voltar</a>";
        exit;
    }else{
        echo "Não foi possível atualizar o contato.". mysqli_error($conexao);
    }



}
?>



    <form method="POST">
    <div>
        <h1>Atualizar - Agenda</h1>
        <label for="nome">Nome: </label>
        <br>
        <input type="text" name="nome" size="30" value= "<?php echo$contato['nome']; ?>" required>
        <br><br>
        <label for="endereco">Endereço: </label>
        <br>
        <input type="text" name="endereco" size="30" value= "<?php echo$contato['endereco']; ?>" required>
        <br><br>
        <label for="telefone">Telefone: </label>
        <br>
        <input type="text" name="telefone" size="30" value= "<?php echo$contato['telefone']; ?>" required>
        <br><br>
        <button type="submit" name="atualizar" value="atualizar">Atualizar</button>
    </div>
    </form>







