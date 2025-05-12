<?php 
/*1. Declare um vetor de 5 posições, preencha-o com números fornecidos pelo 
usuário e exiba os valores na tela. 
rcv
*/

$numeros = [];


for ($i = 0; $i < 5; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}


echo "\ndigitados:\n";
for ($i = 0; $i < 5; $i++) {
    echo "Posição $i: " . $numeros[$i] . "\n";
}


?>