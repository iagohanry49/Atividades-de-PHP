<?php
$horas_trab = 45;
$v_hora = 20.0;

if ($horas_trab <= 40) {
    $salario_semanal = $horas_trab * $v_hora;
} elseif ($horas_trab <= 60) {
    $extras = $horas_trab - 40;
    $salario_semanal = (40 * $v_hora) + ($extras * $v_hora * 1.5);
} else {
    $extras = $horas_trab - 60;
    $salario_semanal = (40 * $v_hora) + (20 * $v_hora * 1.5) + ($extras * $v_hora * 2.0);
}

echo "Salario semanal: R$ " . $salario_semanal;
?>