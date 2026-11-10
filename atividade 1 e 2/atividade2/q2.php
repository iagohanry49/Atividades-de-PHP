<?php

$a = 8;
$b = 3;
$c = 5;

$maior = $a;
$menor = $a;

if ($b > $maior) {
    $maior = $b;
}

if ($c > $maior) {
    $maior = $c;
}

if ($b < $menor) {
    $menor = $b;
}

if ($c < $menor) {
    $menor = $c;
}

echo "O maior número é $maior e o menor número é $menor.";

?>