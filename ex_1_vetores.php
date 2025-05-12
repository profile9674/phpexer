<?php
$notas = readline("Informe o número de notas do aluno:");//solicito o número de itens que o vetor irá possuir
$vetor = array();//crio um array vazio

//pergunto ao usuário as notas a serem calculadas, até o número informado pelo usuário
for($indicador =0 ; $indicador<$notas;$indicador++){
    $vetor[$indicador] = readline("Informe uma nota: ");
}
$media=0;
//acumulo a soma das notas
for($indicador =0 ; $indicador<$notas;$indicador++){
   $media += $vetor[$indicador];
}
/*
Verifico a média, se aprovado, em exame ou reprovado.
*/ 
if (($media/$notas)>=7){
    echo "Aprovado\n";
}else if(($media/$notas)>= 2 || ($media/$notas)<=6.9){
    echo "Em exame\n";
}
else{
    echo "Reprovado\n";
}
//acesso a uma posição de vetor não existente
echo "Acesso a posição não existente, é exibido um aviso\n";
echo $vetor[$notas+1];
//Atribuo valor a posição inexistente, o vetor cresce de tamanho
$vetor[$notas+1] = "Valor qualquer";
//Agora o vetor maior,  exibo o valor da posição
echo $vetor[$notas+1];
//Acesso aos valores utilizando foreach,acessando apenas o elemento
foreach($vetor as $elemento){
    echo $elemento . "\n";
}
//Acesso aos valores utilizando foreach, acessando o índice e o elemento
foreach ($vetor as $chave => $elemento){
    echo "Posição $chave = $elemento\n";
}

