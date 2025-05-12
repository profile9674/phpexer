<?php 
/*6. Crie um vetor com 5 números reais, calcule a média aritmética e mostre os 
números acima da média. 
rcv
*/
$numeros = [];


for ($i = 0; $i < 5; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}

$soma = 0;

for ($i=0; $i<5; $i++) {
    $soma = $soma + $numeros[$i];

}


$media = $soma / 5;

for ($i = 0; $i < 5; $i++) {
    if ($numeros[$i] > $media){
        echo "O numero $numeros[$i] é maior que a média" . "\n";

        
    }
    
    
}


echo "A média é $media";






?>