<?php 
/*11. Crie um vetor de 10 números, solicite um valor X e exiba quantas vezes X 
aparece no vetor. 
rcv
*/


$numero = readline("informe um num: ");
$elementos = [];
$encontrado = false; 
$contador=0;

for($i=0; $i<4; $i++){
    $entrada = readline("informe um número: ");
    $elementos[$i] = $entrada;
}



for($i = 0; $i < 4; $i++) {
    if($elementos[$i] == $numero) {
        $contador++;
        $encontrado = true; // se achou, muda a flag
        
    }
}

if($encontrado){
echo "O valor $numero foi exibido $contador vez(es)";
}else {
    echo "O número $numero não está no vetor.\n";
}







?>