<?php
$forca = 10;
$inteligencia = 15;
$agilidade = 10;

if ($forca > $inteligencia && $forca > $agilidade) {
    $classe = "Guerreiro";
} elseif ($inteligencia > $forca && $inteligencia > $agilidade) {
    $classe = "Mago";
} elseif ($agilidade > $forca && $agilidade > $inteligencia) {
    $classe = "Arqueiro";
} else {
    $classe = "Classe hibrida";
}

echo "Forca: " . $forca . " | Inteligencia: " . $inteligencia . " | Agilidade: " . $agilidade . " | Classe: " . $classe;
?>