<?php 
/*Solicite ao usuário 5 nomes e os exiba em ordem alfabética. 
rcv
*/
$nomes = [];

for($i=0; $i<5; $i++){
    $entrada = readline("Escreva um nome: ");
    $nomes[$i] = $entrada;

}

sort($nomes);

for($i=0; $i<5; $i++){
    echo "A posição $i tem o nome: $nomes[$i]\n";

}


?>