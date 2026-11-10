<?php

$valorHora = 20;
$horasTrabalhadas = 100;

$bruto = $valorHora * $horasTrabalhadas;

$fgts = $bruto * 11 / 100;
$sindicato = $bruto * 3 / 100;

if ($bruto <= 900) {
    $percentualIR = 0;
} else if ($bruto <= 1500) {
    $percentualIR = 5;
} else if ($bruto <= 2500) {
    $percentualIR = 10;
} else {
    $percentualIR = 20;
}

$ir = $bruto * $percentualIR / 100;
$descontos = $sindicato + $ir;
$liquido = $bruto - $descontos;

$brutoF = number_format($bruto, 2, ',', '.');
$irF = number_format($ir, 2, ',', '.');
$sindicatoF = number_format($sindicato, 2, ',', '.');
$fgtsF = number_format($fgts, 2, ',', '.');
$descontosF = number_format($descontos, 2, ',', '.');
$liquidoF = number_format($liquido, 2, ',', '.');

echo "Salário Bruto: R$ $brutoF | IR: R$ $irF ($percentualIR%) | Sindicato: R$ $sindicatoF | FGTS (depositado): R$ $fgtsF | Total de descontos: R$ $descontosF | Salário Líquido: R$ $liquidoF.";

?>