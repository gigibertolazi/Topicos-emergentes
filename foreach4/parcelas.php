<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de parcelas</title>
</head>
<body>
    <h1>Calcular</h1>
    <form method="post">
        <label for="divida">Valor da dívida:</label>
        <input type="text" name="divida" required><br><br>

        <label for="juros">Taxa de juros (%):</label>
        <input type="text" name="juros" required><br><br>

        <label for="parcelas">Número de parcelas:</label>
        <input type="text" name="parcelas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $divida = $_POST['divida'];
        $juros = $_POST['juros'] / 100; 
        $parcelas = $_POST['parcelas'];

        
        $valores_parcelas = [];

        
        for ($i = 1; $i <= $parcelas; $i++) {
            $montante = $divida * pow(1 + $juros, $i);
            $valor_parcela = $montante / $parcelas;
            $valores_parcelas[] = $valor_parcela; 
        }

        
        $montante_total = array_sum($valores_parcelas);
        $media_parcelas = $montante_total / $parcelas;

        
        echo "<h2>Resultados:</h2>";
        echo "Montante total a ser pago: R$ " . number_format($montante_total, 2, ',', '.') . "<br>";
        echo "Média das parcelas: R$ " . number_format($media_parcelas, 2, ',', '.') . "<br>";

        
        echo "<h3>Valores das Parcelas:</h3>";
        foreach ($valores_parcelas as $index => $valor) {
            echo "Parcela " . ($index + 1) . ": R$ " . number_format($valor, 2, ',', '.') . "<br>";
        }
    }
    ?>
</body>
</html>