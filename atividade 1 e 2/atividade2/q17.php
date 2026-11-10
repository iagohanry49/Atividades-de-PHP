<?php
$jogada = 2;
$linha = 3;
$coluna = 3;

if ($jogada >= 1 && $jogada <= 3) {
    if ($linha == 3) {
        if ($jogada == 2 || $jogada == 3) {
            $l_valido = false;
        } else {
            $l_valido = true;
        }
    } else {
        $l_valido = true;
    }
    
    if ($l_valido) {
        echo "Jogada valida";
    } else {
        echo "Jogada invalida";
    }
}
?>