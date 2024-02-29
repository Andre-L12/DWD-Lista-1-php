<?php
//atividade 2
$hora = date("H");
if (0 <= $hora && $hora <= 5){
    echo "<span style='color: red;'>VAI DORMIR </span>";
}
elseif (5 < $hora && $hora <= 11) {
    echo "<span style='color: green;'>BOM DIA </span>";
}
elseif (11 < $hora && $hora <= 17) {
    echo "<span style='color: yellow;'>BOA TARDE  </span>";
}
elseif (17 < $hora && $hora <= 23) {
    echo "<span style='color: blue;'>BOA NOITE</span>";
}
else{
    echo "<span style='color: purple;'>HORA INVÁLIDA </span>";
}
?>;     