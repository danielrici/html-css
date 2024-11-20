<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $nome = $_GET["nome"] ?? "João";
        $sobrenome = $_GET["sobrenome"] ?? "Silva";

        echo "<h1>Olá, $nome $sobrenome! Prazer em te conhecer!</h1>";
    ?>
</body>
</html>