<?php

function fatorial($x){
    $numeros = array();
    for ( $i = 1; $i <= $x; $i++ ) {
        $numeros[]= $i;
    };
    return array_product($numeros);
 };
 
?>;