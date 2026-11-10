<?php
$numero = readline("Digite um número para ver a tabuada: ");
$i = 1;

while ($i <= 10) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
    $i++;
}
?>