<?php

$salario = 1000;

if ($salario <= 280) {
    $percentual = 20;
} else if ($salario > 280 and $salario <= 700) {
    $percentual = 15;
} else if ($salario > 700 and $salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = $salario * $percentual / 100;
$novoSalario = $salario + $aumento;

$salarioFormatado = number_format($salario, 2, ',', '.');
$aumentoFormatado = number_format($aumento, 2, ',', '.');
$novoSalarioFormatado = number_format($novoSalario, 2, ',', '.');

echo "Salário anterior: R$ $salarioFormatado | Percentual aplicado: $percentual% | Valor do aumento: R$ $aumentoFormatado | Novo salário: R$ $novoSalarioFormatado.";

?>