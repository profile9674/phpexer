<?php 
/*10. Peça ao usuário um número X e um vetor com 10 elementos, depois verifique 
se X está presente no vetor. 
rcv
*/

$numero = readline("informe um num: ");
$elementos = [];

for($i=0; $i<3; $i++){
    $entrada = readline("informe um número: ");
    $elementos[$i] = $entrada;
}



for($i=0; $i<3; $i++){
    if($elementos[$i]== $numero){
        echo "o numero $numero é igual ao $elementos[$i]\n";
    }
    elseif($elementos[$i]!= $numero){
        echo "o numero $numero  NÂO é igual ao $elementos[$i]\n";
    }
    
}




?>