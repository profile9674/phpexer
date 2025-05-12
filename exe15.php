<?php 
/*15. Peça um vetor de 10 números e ordene os elementos de forma crescente. 
rcv
*/

$numero = [];

for($i=0; $i<4;$i++){
    $entrada = readline("digite um num: ");
    $numero[$i] = $entrada;

}

sort($numero);

for($i=0; $i<4; $i++){
    echo "A posição $i tem os valores $numero[$i]\n";
}




?>