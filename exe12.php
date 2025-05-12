<?php 
/*12. Leia um vetor de 8 posições e exiba apenas os valores ímpares e suas 
respectivas posições. 
rcv
*/

$numero = [];

for($i=0; $i<3; $i++){
    $entrada = readline("Digite um num: ");
    $numero[$i] = $entrada;
}

for($i=0; $i<3; $i++){
    if($numero[$i] % 2 != 0){
        echo "A posição " . $i + 1 .  " tem o número impar: $numero[$i]\n";
    }
}



?>