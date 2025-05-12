<?php 
/*7. Declare um vetor de 10 posições, preencha-o com valores e exiba os números 
em ordem inversa. 
rcv
*/

$numero = [];


for($i=0; $i<3; $i++){
    $entrada = readline("Informe um num: ");
    $numero[$i] = $entrada;
}

for($i=2; $i>=0; $i--){
    echo "A posição $i tem o numero $numero[$i]\n ";

}





?>