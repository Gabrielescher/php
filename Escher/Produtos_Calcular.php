<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe o calculo do preço e da quantidade do produto</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>SOMA DO PREÇO DO PRODUTO</h3>";
        echo "<hr size='3'color='red'>";
        //Recupera os valore inforMados nas caixas de textos, e armazena nas variaveis
    $num1= $_POST ["Codigo"];
    $num2 = $_POST["Descrição"];
    $num3 = $_POST["Marca"];
    $num4 = $_POST["Preço Unit"];
    $num5 = $_POST["Quantidade"];
    $soma = $num4 + $num5;


    echo "<br>Codigo:" .$num1;
    echo "<br>Descrição:" .$num2;
    echo "<br>Marca:" .$num3;
    echo "<br>Preço Unit:" .$num4;
    echo "<br>Quantidade:" .$num5;
    echo "<hr size='3' color='blue' align='left'
    width='165'>";
    echo "<br>total" .$soma;

    ?>
     <br><img src= 'img/quadronegro.avif' width='500' height='400'>

    
</body>
</html>