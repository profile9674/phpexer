<?php 
/*20. Leia um vetor de 10 números, remova os valores duplicados e exiba o vetor 
final. 
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