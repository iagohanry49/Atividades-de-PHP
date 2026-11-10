<?php
$numero = readline("Digite um número inteiro não negativo: ");
$fatorial = 1;

for ($i = $numero; $i >= 1; $i--) {
    $fatorial *= $i;
}

echo "O fatorial de $numero é: $fatorial";
?>