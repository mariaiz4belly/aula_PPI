<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Categorias</h1>

    <p><a href="categoria_adicionar.php">ADICIONAR</a></p>

    <h2>Categorias cadastradas:</h2>

    <?php

    include "banco/conexao.php";

    $conn = conectar();

    $result = $conn->query("SELECT * FROM categoria");

    if($result->num_rows > 0){

    }else{
        echo "<p>Não existem categorias cadastradas</p>";
    }

    ?>
</body>
</html>