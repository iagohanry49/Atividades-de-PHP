<?php
$tipo = "picanha";
$kg = 6.0;
$cartao = true;

if ($tipo == "file") {
    if ($kg <= 5) {
        $preco_kg = 4.90;
    } else {
        $preco_kg = 5.80;
    }
} elseif ($tipo == "alcatra") {
    if ($kg <= 5) {
        $preco_kg = 5.90;
    } else {
        $preco_kg = 6.80;
    }
} else {
    if ($kg <= 5) {
        $preco_kg = 6.90;
    } else {
        $preco_kg = 7.80;
    }
}

$total = $kg * $preco_kg;

if ($cartao == true) {
    $total = $total - ($total * 0.05);
}

echo "Tipo de carne: " . $tipo . " | Peso: " . $kg . "kg | Valor Total: R$ " . $total;
?>