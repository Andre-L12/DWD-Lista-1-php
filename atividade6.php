<?php
//atividade 6
for ($n=1;$n<=10;$n++){
  $a = $n%2;
  $b = $n%3;
  $c = $n%5;
  $d = $n%7;
  
  if (( $a!= 0) && ($b != 0) && ($c != 0) &&($d != 0) && ($n != 1)){
      echo " $n -- É um número primo |<br>";
      echo "Só é divisível por 1 e ele mesmo!<br>";
} elseif(($n ==2) || ($n ==3) || ($n==5) ||($n==7)){
      echo "$n -- É um número primo |<br>";
      echo "Só é divisível por 1 e ele mesmo!<br>";
} elseif($n ==1){
      echo "$n -- NÃO É PRIMO |<br>";
      echo "Só é divisível por ele mesmo!<br>";
} else{
      echo " $n -- NÃO É PRIMO |<br>";
      $lista = array();
	  for ($x = $n ;$x >= 1; $x--){
		$r=$n%$x;
		if ($r ==0){
    		$lista[] = $x;}
            }   
   echo "Seus divisores são: | ";
   echo implode(", ", $lista);
   echo " | <br>";
   
  };
};
?>;