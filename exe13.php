<?php 
/*13. Peça 10 números ao usuário e exiba apenas os valores únicos (sem 
repetição). 
rcv
*/

$numero = [];

for($i=0; $i<4; $i++){
    $entrada = readline("informe um num: ");
    $numero[$i] = $entrada;
}

for($i=0; $i<4; $i++){
    $contador = 0;
    for($j=0; $j<4; $j++){
        if($numero[$i] == $numero[$j]){
                $contador++;
        } 
    }
    if($contador==1){
        echo "$numero[$i]\n";
    }
}






?>