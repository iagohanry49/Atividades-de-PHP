<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($i = 1; $i <= 10; $i++) {
    $peso = (float) readline("Digite o peso médio da fruta do lote $i (em gramas): ");
    
    if ($peso < 100) {
        $pequenos++;
    } elseif ($peso >= 100 && $peso <= 200) {
        $medios++;
    } else {
        $grandes++;
    }
}

echo "Total de lotes pequenos (< 100g): $pequenos | Total de lotes médios (100g - 200g): $medios | Total de lotes grandes (> 200g): $grandes";
?>