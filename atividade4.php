<?php
//atividade 4
$populacao1 = 80000;
$populacao2 =200000;
$anos = 0;
while ( $populacao1 < $populacao2 ) {
    $populacao1 = (($populacao1*0.03)+$populacao1);
    $populacao2= (($populacao2*0.015)+$populacao2);
    $anos++;
 } 
 echo "São necessários: $anos anos";
?>;