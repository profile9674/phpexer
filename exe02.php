<?php 
/*2. Peça ao usuário 5 números inteiros, armazene-os em um vetor e mostre a 
soma dos valores. 
rcv
*/
$numeros = [];


for ($i = 0; $i < 3; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}

$soma = 0;

for ($i=0; $i<3; $i++) {
    $soma = $soma + $numeros[$i];

}

echo "O resultado é $soma";







?>