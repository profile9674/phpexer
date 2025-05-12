<?php 
/*17. Leia 2 vetores de 5 posições e exiba um terceiro vetor contendo os valores 
comuns entre os dois. 
rcv
*/

$numero1 = [];
$numero2 = [];
$comuns = [];

for($i=0; $i<3; $i++){
    $entrada1 = readline("informe um numero: ");
    $numero1[$i] = $entrada1;
}

for($i=0; $i<3; $i++){
    $entrada2 = readline("informe um numero: ");
    $numero2[$i] = $entrada2;
}
for($i=0; $i<3; $i++){
    $contador = 0;
    for($j=0; $j<3; $j++){
        if($numero1[$i] == $numero2[$j]){
              $comuns[$j] = $numero1[$i];
              break; // evita contar o mesmo número mais de uma vez
        } 
    }
    
}
echo "Números comuns entre os dois vetores:\n";
foreach ($comuns as $valor) {
    echo "$valor\n";
}

?>