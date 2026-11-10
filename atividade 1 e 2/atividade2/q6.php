<?php

$nota1 = 8;
$nota2 = 7;

$media = ($nota1 + $nota2) / 2;

if ($media >= 9) {
    $conceito = "A";
} else if ($media >= 7.5) {
    $conceito = "B";
} else if ($media >= 6) {
    $conceito = "C";
} else if ($media >= 4) {
    $conceito = "D";
} else {
    $conceito = "E";
}

if ($conceito == "A" or $conceito == "B" or $conceito == "C") {
    $resultado = "APROVADO";
} else {
    $resultado = "REPROVADO";
}

echo "Nota 1: $nota1 | Nota 2: $nota2 | Média: $media | Conceito: $conceito | Resultado: $resultado";

?>