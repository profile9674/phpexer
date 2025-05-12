<?php 
/*
16. Leia um vetor de 20 números e exiba a quantidade de números primos. 
rcv



$num = readline("Informe um número: ");

$contador = 0;

for($i = 1; $i <= $num; $i++){
    if($num % $i == 0){
        $contador++;
} 
}



if($contador == 2){
    echo "Primo";
}else{
    echo "Não Primo";
}



$numero = [];

for($i=0; $i<3; $i++){
    $entrada = readline("informe um num: ");
    $numero[$i] = $entrada;
}


for($i=0; $i<3; $i++){
    $contador = 0;
    for($j=0; $j<3; $j++){
        if($numero[$j] % $j == 0){
                $contador++;
        } 
    }
    if($contador==2){
        echo "$numero[$i] primo\n";
    }else{
        echo "não primo\n";
    }
}
*/
$numero = [];
$quantidadePrimos = 0;

for($i = 0; $i < 3; $i++){
    $entrada = readline("Informe um número: ");
    $numero[$i] = $entrada;
}

for($i = 0; $i < 3; $i++){
    $n = $numero[$i];
    $divisores = 0;

    for($j = 1; $j <= $n; $j++){
        if($n % $j == 0){
            $divisores++;
        }
    }

    if($divisores == 2){
        echo "$n é primo\n";
        $quantidadePrimos++;
    } else {
        echo "$n não é primo\n";
    }
}

echo "Quantidade de números primos: $quantidadePrimos\n";




?>