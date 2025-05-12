<?php 
/*23. Peça um vetor de 20 números, remova todos os números ímpares e exiba 
apenas os valores pares. 
rcv
*/
$numeros = [];


for ($i = 0; $i < 3; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}


$pares = [];
$j=0;

for ($i = 0; $i < 3; $i++) {
    if ($numeros[$i] % 2 == 0) {
        $pares[$j] = $numeros[$i];  // coloca o número par no vetor de pares
        $j++;  // avança o índice para o próximo espaço
    }
}


for ($k = 0; $k < $j; $k++) {
    echo "Os pares foram: $pares[$k]\n";
}
    
    
    








?>