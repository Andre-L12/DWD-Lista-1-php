
<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativiade 10</title>
</head>
<body>
<form method="post" action="">

 <span class="input-group-text">Digite um numero</span>
 <input type="text" name="numero" aria-label="numero" required><br><br>

</form>
</body>
</html> -->

<?php
/* Crie uma função que retorne o valor da expressão: 2/3 + 3/5 + 4/7 + 5/9 + … + n/m. Essa
função recebe como parâmetro o valor de n.
OBS.: Crie uma variável e coloque o valor de n para testar. Chame a função criada
passando essa variável como parâmetro*/

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {

$n = intval($_POST['numero']); */ 
function expressao($n){
$i =2;
$m=3;
$lista =array();
while ($i <= $n){ 
    $lista[]=($i/$m);
    $i++;
    $m=$m+2;
}
echo "<br>";
echo array_sum($lista);
}
echo expressao(5);
?>;
