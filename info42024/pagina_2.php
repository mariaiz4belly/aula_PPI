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
    $opcoes = $_POST['opcoes'];

    if($opcoes == "Barra do Cunhaú") {
        echo "<h1> Barra do Cunhaú </h1>";
        echo "<img src='img/cunhau.jpg' width='50%' height='25%' />";
    }elseif($opcoes == "Baía Formosa") {
        echo "<h1> Baía Formosa </h1>";
        echo "<img src='img/baia.jpg' width='50%' height='25%' />";
    }elseif($opcoes == "Pipa") {
        echo "<h1> Pipa </h1>";
        echo "<img src= 'img/pipa.jpg' width='50%' height='25%' />";
    }
    ?>
</body>
</html>