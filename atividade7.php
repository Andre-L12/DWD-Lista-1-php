<?php
//atividade 7
echo "<h1> Lojas Quase Dois - Tabela de preços </h1>";
echo "<h1> Preço unitário: R$ 1,99 </h1><br><br>";
echo "-----QTDE TOTAL ------ <br>";
$valor = 1.99;
for ($i=1; $i<= 50; $i++){
    echo " | $i - R$ $valor | <br>";
    $valor = $valor+1.99;
}
?>; 