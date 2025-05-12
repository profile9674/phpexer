<?php 
/*8. Solicite 5 notas de um aluno, armazene-as e exiba a nota mais alta e a mais 
baixa. 
rcv
*/
$nota = [];

for($i = 0; $i<3; $i++){
    $entrada = readline("Digite uma nota: ");
    $nota[$i] = $entrada;

}


$menor = $nota[0];
$maior = $nota[0];

for($i = 0; $i<3; $i++){
    if($nota[$i] > $maior){
        $maior = $nota[$i];
    }
    if($nota[$i] < $menor ){
        $menor = $nota[$i];
    }

}
echo "$maior \n";
echo "menor nota é $menor";







?>