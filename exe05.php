<?php 
/*5. Preencha um vetor de 10 posições com valores inteiros aleatórios entre 1 e 
100 e exiba o maior e o menor número encontrado. 
rcv
*/

$numeros = [];


for ($i = 0; $i < 3; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}


$menor = $numeros[0];
$maior = $numeros[0];
for ($i = 0; $i < 3; $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }
    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    
    }
}
echo "Maior número: $maior\n";
echo "Menor número: $menor";





?>