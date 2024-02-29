<?php
$numero =6;
$resultadofatorial= fatorial($numero);
$numeros = array();
     function fatorial($x){
        for ( $i = 1; $i <= $x; $i++ ) {
            $numeros[]= $i;
        };
        return array_product($numeros);
};
echo "$resultadofatorial";
?>;