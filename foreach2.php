<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php
     $v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
     echo "Vetor 1: <br> ";
     foreach($v1 as $CHAVE => $Valor){
        echo "Chave: $CHAVE, Valor: $Valor <br><br>";
    
     }

     $v2 = array('a'=>8, 'b'=>9, 'd'=>6, 'c'=>2, 'e'=>5);
     echo "Vetor 2: <br> ";
     foreach($v2 as $CHAVE => $Valor){
        echo "Chave: $CHAVE, Valor: $Valor <br><br>";
     }

     $v3 = array ("RG" => "00.000.00-X", "CPF" => "000.000.000-00", "Cartão de crédito" => "12345");
     echo "Vetor 3: <br> ";
     foreach($v3 as $CHAVE => $Valor){
        echo "Chave: $CHAVE, Valor: $Valor <br><br>";
     }

     $v4 = array ("aluno1" => "Alberto", "aluno3" => "Bianca", "aluno5" => "Carlos", "aluno24" => "Maria");
     echo "Vetor 4: <br> ";
     foreach($v4 as $CHAVE => $Valor){
        echo "Chave: $CHAVE, Valor: $Valor <br><br>";
     }


    ?>
</body>
</html>