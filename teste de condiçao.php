<?php
/*1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero.
 A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/

 /*
 $num=9; // valor de entrada

 if( $num>0) {echo 'o valor informado e positivo';}
 else if( $num <0) { echo 'o valor informado e negativo';}
 else if( $num == 0) { echo 'o valor informado e igual a zero';}

*/
 

/*2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.*/
/*
$entrada = 4; $contador=0;
while($contador<=10) { echo "$contador"."x"."$entrada"." = "."$entrada"*"$contador"."\n"; $contador++;}
*/

/*3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela.
Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6*/

$num = 3;

if($num > 0){
  $valor = $num;
  
  for($i = ($valor - 1); $i > 0; $i--){
    $valor = $valor * $i;
  }
}else{
  $valor = 0;
}

echo "!{$num} = {$valor}";



?>