<?php 
/*18. Crie um vetor de 10 números aleatórios e mova todos os valores pares para o 
início do vetor e os ímpares para o final. 
rcv
*/
$numero = [];
$pares = [];
$impares = [];
$final =  [];

for($i=0; $i<3; $i++){
    $entrada = readline("informe um numero: ");
    $numero[$i] = $entrada;
}
$j=0;
$k=0;
for ($i = 0; $i < 3; $i++) {
    if($numero[$i]%2==0){
        $pares[$j] = $numero[$i];
        $j++;
    }else{
        $impares[$k] = $numero[$i];
        $k++;
    }
}

for ($i = 0; $i < $j; $i++) {
    $final[$i] = $pares[$i];
}

for ($i = 0; $i < $k; $i++) {
    $final[$j] = $impares[$i];
    $j++; // Atualiza índice do vetor final
}

echo "Vetor final (pares no início, ímpares no final):\n";
foreach ($final as $valor) {
    echo "$valor\n";
}


?>