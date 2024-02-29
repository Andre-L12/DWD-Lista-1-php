<?php
/* Crie uma função que retorne o valor da expressão: 2/3 + 3/5 + 4/7 + 5/9 + … + n/m. Essa
função recebe como parâmetro o valor de n.
OBS.: Crie uma variável e coloque o valor de n para testar. Chame a função criada
passando essa variável como parâmetro*/
function expressao($n){
    for ($i= 2;$i<=$n;$i++){
        $m  = $i+1;
        $lista = array();
        if($i ==2){
            $fracao = ($i)/($m);
            $lista[] = $fracao;
            
        }else{
            $fracao = ($i)/($m+2);
            $lista[] = $fracao;
        }
        
} return array_sum($lista);
}
echo expressao(3);
?>;