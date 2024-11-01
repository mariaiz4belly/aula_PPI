<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Categoria</h1>

    <form action="bd_categoria_adicionar.php" method="post">
        <p>
            <label for="cat">Nome:</label>
            <input type="text" name="categoria" id="cat" />
        </p>

        <p>
            <input type="submit" value="Enviar"/>
        </p>

    </form>

</body>
</html>