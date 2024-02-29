<?php
//atividade 5
echo "<h1 >100 primeiros numeros da sequência de Fibonacci</h1>";
$numero1 = 1;
$numero2 = 1;
echo " $numero1 | $numero2 |";
for ( $i=2 ; $i <= 100 ; $i++ ) {
$resultado =$numero1 + $numero2;

echo "$resultado | ";
$numero2 = $resultado - $numero2;
$numero1 =$resultado;

}
?>;