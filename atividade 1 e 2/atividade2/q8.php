<?php

$saque = 256;

if ($saque >= 10 and $saque <= 600) {

    $nota100 = (int) ($saque / 100);
    $resto = $saque - ($nota100 * 100);

    $nota50 = (int) ($resto / 50);
    $resto = $resto - ($nota50 * 50);

    $nota10 = (int) ($resto / 10);
    $resto = $resto - ($nota10 * 10);

    $nota5 = (int) ($resto / 5);
    $resto = $resto - ($nota5 * 5);

    $nota1 = $resto;

    echo "Saque de R$ $saque: $nota100 nota(s) de R$ 100, $nota50 nota(s) de R$ 50, $nota10 nota(s) de R$ 10, $nota5 nota(s) de R$ 5 e $nota1 nota(s) de R$ 1.";

} else {
    echo "O valor do saque deve ser entre R$ 10 e R$ 600.";
}

?>