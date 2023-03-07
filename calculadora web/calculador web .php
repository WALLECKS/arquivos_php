<?php
$num1= filter_input(INPUT_POST,"valor1");
$num2=filter_input(INPUT_POST,'valor2');
$operador=filter_input(INPUT_POST,'operaçao');
$resultado="";
if($num1 && $num2)
{
    switch($operador)
    {
        case "soma":
            $resultado=($num1 + $num20);
        break;

        case "subtraçao":
            $resultado=($num1 - $num20);
        break;

        case "multiplicaçao":
            $resultado=($num1 * $num20);
        break;

        case "divisao":
            $resultado=($num1 / $num20);
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <h1>Calculador Web</h1><br>
    <hr>
    <form action="" method="post">
        <input type="number" name ="valor1" size="30%" placeholder="informe o primeiro valor"><br> <br>
        <input type="number" name="valor2" size="30%" placeholder="informe o segundo valor">
<br>
        <h2> Escolha a operaçao </h2>
        <select name="operaçao">
            <option>soma</option>
            <option>subtraçao</option>
            <option>multiplicaçao</option>
            <option>devisao</option>
        </select>
<br>
<br>
        <button type="submit">calcular</button>
    </form>
</body>
</html>