<?php 
/*
$numeros = [];


for ($i = 0; $i < 3; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}

$soma = 0;

for ($i=0; $i<3; $i++) {
    $soma = $soma + $numeros[$i];

}

echo "O resultado é $soma";

*/



/*6. Crie um vetor com 5 números reais, calcule a média aritmética e mostre os 
números acima da média. 
rcv

$numeros = [];


for ($i = 0; $i < 5; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}

$soma = 0;

for ($i=0; $i<5; $i++) {
    $soma = $soma + $numeros[$i];

}


$media = $soma / 5;

for ($i = 0; $i < 5; $i++) {
    if ($numeros[$i] > $media) {
        echo "O numero $numeros[$i] é maior que a média" . "\n";
    }
    if ($numeros[$i] < $media){
        echo "O numero $numeros[$i] é menor que a média" . "\n";
    }
    
}


echo "A média é $media";

/*


<?php 
/*6. Crie um vetor com 5 números reais, calcule a média aritmética e mostre os 
números acima da média. 
rcv

$numeros = [];


for ($i = 0; $i < 5; $i++) {
    $entrada = readline("Digite o número: ");
    $numeros[$i] = $entrada;
}

$soma = 0;

for ($i=0; $i<5; $i++) {
    $soma = $soma + $numeros[$i];

}


$media = $soma / 5;


$acima = [0];

for ($i = 0; $i < 5; $i++) {
    if($numeros[$i] > $media){
        $acima[] = $numeros[$i];
    }echo "$acima \n";
        
}




echo "A média é $media";



exer10 essse abaixo


$numero = readline("informe um num: ");
$elementos = [];
$encontrado = false; // flag começa como "não encontrado"


for($i=0; $i<3; $i++){
    $entrada = readline("informe um número: ");
    $elementos[$i] = $entrada;
}

for($i = 0; $i < 3; $i++) {
    if($elementos[$i] == $numero) {
        $encontrado = true; // se achou, muda a flag
        break; // não precisa continuar procurando
    }
}

if ($encontrado) {
    echo "O número $numero está presente no vetor.\n";
} else {
    echo "O número $numero não está no vetor.\n";
}



$numero = [];

for($i=0; $i<3; $i++){
    $entrada = readline("informe um num: ");
    $numero[$i] = $entrada;
}

for($i=0; $i<3; $i++){
   if($numero[$i]>10){
        echo "Posição $i e o numero: $numero[$i]\n";
   }  
}





$numero = [];
$soma = 0;

for($i=0; $i<5; $i++){
    $entrada = readline("informe um num: ");
    $numero[$i] = $entrada;
    $soma = $soma + $numero[$i];
        
    
}
echo "A média é " . $soma/5 . "\n";




$numeros = [];

for($i=0; $i<3; $i++){
    $entrada = readline("Informe num: ");
    $numeros[$i] = $entrada;
}
$soma = 0;
for($i=0; $i<3; $i++){
    $soma = $soma + $numeros[$i];
    echo "$numeros[$i]\n";
}

echo " a média é " . ($soma/3) . "\n";





do{
    echo "tente novamente\n";

}while($entrada != "ana");

echo "voce acertou";


$numeros = [];

for($i=0; $i<3; $i++){
    $entrada = readline("Informe num: ");
    $numeros[$i] = $entrada;
}
$soma = 0;



for($i=0; $i<3; $i++){
   if($numeros[$i]%2==0){
    echo "Os numeros digitados pares foram : $numeros[$i]\n";
}elseif($numeros[$i]%2>0){
   
   
    echo "Os numeros digitados impares foram : $numeros[$i]\n";
}
}



$numeros = [];


for($i=0; $i<3; $i++){
    $entrada = readline("Informe um numero: ");
    $numeros[$i] = $entrada;
}

$maior = $numeros[0];
$menor = $numeros[0];

for($i=0; $i<3; $i++){
    if($numeros[$i]>$maior){
        echo "o maior é $numeros[$i]\n";
    }
    if($numeros[$i]<$menor){
        echo "o menor é $numeros[$i]\n";
    }
}



$numeros = [];


for($i=0; $i<5; $i++){
    $entrada = readline("Informe um numero: ");
    $numeros[$i] = $entrada;
}

$soma = 0;

for($i=0; $i<5; $i++){
    $soma = $soma + $numeros[$i];
    echo "$numeros[$i]\n";
}

echo " a média é " . ($soma/5) . "\n";
$media = $soma/5;

for($i=0; $i<5; $i++){
    if($numeros[$i] >$media){
        echo "os numeros acima da média são: $numeros[$i]\n";
    }
}

$numeros = [];


for($i=0; $i<3; $i++){
    $entrada = readline("Informe um numero: ");
    $numeros[$i] = $entrada;
}


for($i=2; $i>=0; $i--){
    echo"Os numeros digitados foram: $numeros[$i]\n";


}

$numeros = [];

for($i=0; $i<5; $i++){
    $entrada = readline("Digite um num: ");
    $numeros[$i] = $entrada;
}

$contadorpos = 0;
$contadornega = 0;

for($i=0; $i<5; $i++){
    if($numeros[$i]>0){
        $contadorpos++;
    }
    if($numeros[$i]<0){
        $contadornega++;
    }

}
echo "Tem $contadorpos num positivos\n";
echo "Tem $contadornega num negativos";

*/

$numeros = [];
$quantidadeprimos = 0;

for($i=0; $i<3; $i++){
    $entrada = readline("Informe um numero: ");
    $numeros[$i] = $entrada;
}


for($i=0; $i<3; $i++){
    $n = $numeros[$i];
    $divisores=0;

    for($j=1; $j <= $n; $j++){
        if($n % $j == 0){
            $divisores++;
        }
    }
    if($divisores==2){
        echo "o numero $n é primo\n";
        $quantidadeprimos++;
    } else{
        echo "o numero $n NÃO é primo\n";
    }


}
echo "a quantidade de primos é $quantidadeprimos\n";


testando

jdkfalk



?>