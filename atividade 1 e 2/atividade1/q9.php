<?php
$somaTotal = 0;
$numero = -1; // Inicializa com valor diferente de 0 para entrar no while

while ($numero != 0) {
    $numero = (int) readline("Digite um número (0 para encerrar): ");
    $somaTotal += $numero;
}

echo "A soma total dos valores informados é: $somaTotal\n";
?>