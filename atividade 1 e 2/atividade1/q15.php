<?php
$numero = readline("Digite um número para ver a tabuada: ");

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado   ";
}
?>