<?php 
/*9. Leia um vetor de 10 números e exiba quantos são positivos e quantos são 
negativos. 
rcv
*/

$numeros = [];

for($i=0; $i<3; $i++){
    $entrada = readline("Digite um num: ");
    $numeros[$i] = $entrada;
}

$contador=0;
$contadornega=0;

for($i=0; $i<3; $i++){
    if($numeros[$i]>0){
       // echo "$numeros[$i] é positivo \n";
        $contador++;
    }
    if($numeros[$i]<0){
        // echo "$numeros[$i] é negativo \n";
         $contadornega++;
     }

}
echo "Tem $contador positivos";
echo "Tem $contadornega negativos";


?>