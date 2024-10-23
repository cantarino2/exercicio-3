<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média</h2>
    <form method="post" action="">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" step="0.01" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura dos dados do formulário
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        // Cálculo da média
        $media = ($nota1 + $nota2 + $nota3) / 3;

        // Verifica se o aluno foi aprovado ou reprovado
        $resultado = ($media >= 7) ? "Aprovado" : "Reprovado";

        // Exibição dos resultados
        echo "<h3>Nome do Aluno: $nome</h3>";
        echo "<h3>Média: " . number_format($media, 2) . "</h3>";
        echo "<h3>Status: $resultado</h3>";
    }
    ?>
</body>
</html>

