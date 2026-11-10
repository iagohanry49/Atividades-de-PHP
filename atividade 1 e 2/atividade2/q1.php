<?php

$a = 15;
$b = 3;
$c = 9;

if ($a <= $b && $a <= $c) {
    $primeiro = $a;
    if ($b <= $c) {
        $segundo = $b;
        $terceiro = $c;
    } else {
        $segundo = $c;
        $terceiro = $b;
    }
} elseif ($b <= $a && $b <= $c) {
    $primeiro = $b;
    if ($a <= $c) {
        $segundo = $a;
        $terceiro = $c;
    } else {
        $segundo = $c;
        $terceiro = $a;
    }
} else {
    $primeiro = $c;
    if ($a <= $b) {
        $segundo = $a;
        $terceiro = $b;
    } else {
        $segundo = $b;
        $terceiro = $a;
    }
}

echo "A ordem crescente é: $primeiro, $segundo, $terceiro";

?>