<?php
$p1 = 1;
$p2 = 1;
$p3 = 0;
$p4 = 0;
$p5 = 0;

$soma = $p1 + $p2 + $p3 + $p4 + $p5;

if ($soma == 2) {
    echo "Classificacao: Suspeita";
} elseif ($soma == 3 || $soma == 4) {
    echo "Classificacao: Cumplice";
} elseif ($soma == 5) {
    echo "Classificacao: Assassino";
} else {
    echo "Classificacao: Inocente";
}
?>