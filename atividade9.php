
<?php
/* 9. O número de combinações possíveis de m elementos em grupos de n elementos (n <= m) é dada pela fórmula de combinação m!/((m-n)!n!). Coloque dois valores quaisquer nas variáveis m e n e calcule a combinação de m, n a n. Utilize a função fatorial do exercício anterior e chame essa função várias vezes.
*/
include 'atividade8.php'; 
function combinacao($m ,$n){
        if ($n <= $m){
            $x = fatorial($m)/((fatorial($m-$n)*fatorial($n)));
            return $x;
        };
}
    echo combinacao(25,5);

?>
