<?php

$lado1 = 5;
$lado2 = 5;
$lado3 = 5;

if ($lado1 + $lado2 > $lado3 and $lado1 + $lado3 > $lado2 and $lado2 + $lado3 > $lado1) {

    if ($lado1 == $lado2 and $lado2 == $lado3) {
        $tipo = "Equilátero";
    } else if ($lado1 == $lado2 or $lado1 == $lado3 or $lado2 == $lado3) {
        $tipo = "Isósceles";
    } else {
        $tipo = "Escaleno";
    }

    echo "Os valores formam um triângulo do tipo $tipo.";

} else {
    echo "Os valores não formam um triângulo.";
}

?>