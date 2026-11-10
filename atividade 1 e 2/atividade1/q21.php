<?php
$consumoTotal = 0;

for ($dia = 1; $dia <= 7; $dia++) {
    $litros = readline("Digite o consumo do dia $dia (em litros): ");
    $consumoTotal += $litros;
}

echo "O consumo total de água nos 7 dias foi de $consumoTotal litros.";
?>