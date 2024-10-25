<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        OPERADORES ARITMÉTICOS
        + soma
        - subtração
        * multiplicação
        / divisão
        % resto da divisão

        Obs.: Sempre retorna número.
        */

        /*
        Armazene um número qualquer em uma variável,
        posteriormente imprima na página HTML em
        título de nível 1 o dobro do número armazenado.
        */

        //Exemplo 1
        $numero = 5;
        echo "<h1>O dobro de $numero é: ".($numero*2)."</h1>";

        //Exemplo 2
        $dobro = $numero*2;
        echo "<h1>".$dobro."<h1>";
        
        //Exemplo 3
        echo "<h1> $dobro </h1>";

        /*
        Armazene dois valores reais em duas variáveis.
        Posteriormente, imprima na página HTML em
        parágrafo a média aritmética entre os dois
        números armazenados.
        */

        //Exemplo 1
        $num1 = 7.0;
        $num2 = 5.0;

        echo "<p> A média de Bruno é: ".(($num1 + $num2)/2)."</p>";

        //Exemplo 2
        $num1 = 7.0;
        $num2 = 5.0;
        $media = ($num1 + $num2)/2;
 
        echo "<p>".$media."</p>";

        /*
        OPERADORES CONDICIONAIS

        < menor que
        <= menor ou igual a
        > maior que
        >= maior ou igual a
        == igual (valor)
        === igual (valor e tipo)
        != diferente (valor)
        !== diferente (valor e tipo)

        Obs.: Retornam valor booleano.
        True e False
        */

        echo "<p>".(10>5)."</p>";
        echo "<p>".(10<5)."</p>";

        echo "<p>".(10>10)."</p>";
        echo "<p>".(10>=10)."</p>";

        echo "<p>".(10==10)."</p>";

        echo "<p>".(10==10.0)."</p>";
        echo "<p>".(10===10.0)."</p>";

        /*
        OPERADORES LÓGICOS

        || ou (apenas uma operação precisa ser verdadeira para resultar "true")
        && e (apenas uma operação precisa ser verdadeira para resultar "false")
        ! negação (troca o sinal da operação)

        Obs.: Retornam valor booleano.
        */

        echo "<p>".((10==10) || (5>7))."</p>";

        echo "<p>".((10==10) && (5>7))."</p>";

        echo "<p>".(!(5>7))."</p>";
    ?>
</body>
</html>