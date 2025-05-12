<?php 
/*14. Leia dois vetores de 5 posições e exiba um terceiro vetor contendo a soma dos 
elementos correspondentes. 
rcv
*/
$numero1 = [];
$numero2 = [];

for($i=0;$i<3;$i++){
    $entrada1 = readline("Informe um numero: ");
    $numero1[$i] = $entrada1;
}

for($i=0;$i<3;$i++){
    $entrada2 = readline("Informe um numero: ");
    $numero2[$i] = $entrada2;
}

$listasoma = [];


for($i=0; $i<3;$i++){
    $listasoma[$i] = $numero1[$i] + $numero2[$i];
    
}

for($i = 0; $i < 3; $i++) {
    echo "A soma de $numero1[$i] e $numero2[$i] é: $listasoma[$i]\n";
}

?>