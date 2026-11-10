<?php
$etiqueta = 100.0;
$condicao = 1;

if ($condicao == 1) {
    $final = $etiqueta - ($etiqueta * 0.10);
} elseif ($condicao == 2) {
    $final = $etiqueta - ($etiqueta * 0.05);
} elseif ($condicao == 3) {
    $final = $etiqueta;
} else {
    $final = $etiqueta + ($etiqueta * 0.10);
}

echo "Valor final a pagar: R$ " . $final;
?>