<?php
$somaTemperaturas = 0;
$maiorTemperatura = null;

for ($i = 1; $i <= 7; $i++) {
    $temp = (float) readline("Digite a temperatura do dia $i: ");
    
    $somaTemperaturas += $temp;
    
    if ($i == 1 || $temp > $maiorTemperatura) {
        $maiorTemperatura = $temp;
    }
}

$media = $somaTemperaturas / 7;
echo "Temperatura média: " . number_format($media, 2) . " | Maior temperatura registrada: $maiorTemperatura";
?>