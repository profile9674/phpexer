<?php 
/*3. Crie um vetor com 10 números e exiba apenas os pares armazenados. 
rcv
*/




$numeros = [];


for ($i = 0; $i < 10; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}


$contador = 0;

for ($i = 0; $i < 10; $i++) {
    if ($numeros[$i] % 2 == 0){
        echo "O numero $numeros[$i] é par" . "\n";
        $contador++;
        
    }
    
    
    
}

echo "Foram diditados: $contador números pares";








?>