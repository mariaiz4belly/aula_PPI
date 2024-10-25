<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type='text/css' media='screen' href='../info2024/img/logo.png'>
    <title>Quiz</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $nascimento = $_POST["nascimento"];
        $curso = $_POST["curso"];

        $resultado1 = $_POST["q1"];
        $resultado2 = $_POST["q2"];
        $resultado3 = $_POST["q3"];
        $resultado4 = $_POST["q4"];
        $resultado5 = $_POST["q5"];

        $correto1 = "c";
        $correto2 = "b";
        $correto3 = "c";
        $correto4 = "a";
        $correto5 = "a";

        $acertos = 0;
        $erros = 0;

        if ($resultado1 == $correto1) {
            $acertos++;
        } else {
            $erros++;
        }

        if ($resultado2 == $correto2) {
            $acertos++;
        } else {
            $erros++;
        }

        if ($resultado3 == $correto3) {
            $acertos++;
        } else {
            $erros++;
        }

        if ($resultado4 == $correto4) {
            $acertos++;
        } else {
            $erros++;
        }

        if ($resultado5 == $correto5) {
            $acertos++;
        } else {
            $erros++;
        }

        echo "<p>Discente: $nome </p>";
        echo "<p> Data de Nascimento: $nascimento </p>";
        echo "<p> Curso: $curso </p>";
        echo "<p> Matrícula: $matricula </p>";
        echo "<br />";
        echo "<p> Você acertou $acertos questão(ões). </p>";
        echo "<p> Você errou $erros questão(ões). </p>";
    ?>
</body>
</html>