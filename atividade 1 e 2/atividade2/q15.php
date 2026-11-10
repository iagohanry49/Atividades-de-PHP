<?php
$kwh = 150;

if ($kwh <= 100) {
    $v_kwh = 0.50;
} elseif ($kwh <= 200) {
    $v_kwh = 0.70;
} elseif ($kwh <= 300) {
    $v_kwh = 0.90;
} else {
    $v_kwh = 1.10;
}

$v_total = $kwh * $v_kwh;

echo "Consumo: " . $kwh . " kWh | Valor por kWh: R$ " . $v_kwh . " | Valor Total: R$ " . $v_total;
?>