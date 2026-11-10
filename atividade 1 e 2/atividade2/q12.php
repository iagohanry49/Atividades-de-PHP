<?php
$peso = 70.0;
$altura = 1.75;
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "IMC: " . $imc . " - Abaixo do peso";
} elseif ($imc <= 25) {
    echo "IMC: " . $imc . " - Peso normal";
} elseif ($imc <= 30) {
    echo "IMC: " . $imc . " - Acima do peso";
} elseif ($imc <= 40) {
    echo "IMC: " . $imc . " - Obeso";
} else {
    echo "IMC: " . $imc . " - Obesidade grave";
}
?>