<?php 
/*21. Crie um vetor de 15 números inteiros e exiba a moda (o número que mais se 
repete). 
rcv
*/


$numero = [];
$moda = null;  // Vai armazenar o número da moda
$maxContagem = 0;  // Vai armazenar a maior contagem


for($i = 0; $i < 4; $i++) {
    $entrada = readline("informe um num: ");
    $numero[$i] = $entrada;
}


for($i = 0; $i < 4; $i++) {
    $contador = 0;
    
    // Conta quantas vezes o número atual aparece
    for($j = 0; $j < 4; $j++) {
        if($numero[$i] == $numero[$j]) {
            $contador++;
        }
    }
    
    // Se a contagem for maior que a maior contagem registrada até agora, atualiza
    if($contador > $maxContagem) {
        $maxContagem = $contador;
        $moda = $numero[$i];
    }
}


echo "A moda é: $moda\n";


?>