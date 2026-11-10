<?php
$dias = 4;
$horas_trabalhadas = 240;
$jornada_normal = $dias * 60;

$horas_extras = 0;
if ($horas_trabalhadas > $jornada_normal) {
    $horas_extras = $horas_trabalhadas - $jornada_normal;
}

$descanso = $horas_extras * 1.5;

echo "Horas extras: " . $horas_extras . " | Horas de descanso: " . $descanso;
?>