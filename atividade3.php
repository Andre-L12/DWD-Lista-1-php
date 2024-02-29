<?php
//atividade 3
$conta = 101.53;
$amigos = 3;
$divisao = $conta/$amigos;
$inteiro = $conta % $amigos;
if ($inteiro != 0){
    $paga_menos = floor($divisao);
    $paga_mais = $divisao +(($divisao-floor($divisao))*2);
    echo "todos  pagam $paga_menos e um paga $paga_mais";
}
else{
    echo "todos pagam $divisao";
}
?>;