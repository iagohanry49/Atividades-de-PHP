<?php
$totalVendido = 0;

for ($dia = 1; $dia <= 5; $dia++) {
    $quantidade = readline("Digite a quantidade vendida no dia $dia: ");
    $totalVendido += $quantidade;
}

echo "Total de unidades vendidas no período: $totalVendido";
?>