<?php
$numeroSecreto = 42; 
$palpite = 0;

echo "Tente adivinhar o número secreto!\n";

while ($palpite != $numeroSecreto) {
    $palpite = (int) readline("Digite seu palpite: ");

    if ($palpite > $numeroSecreto) {
        echo "O número secreto é MENOR.\n";
    } elseif ($palpite < $numeroSecreto && $palpite != $numeroSecreto) {
        echo "O número secreto é MAIOR.\n";
    }
}

echo "Parabéns! Você acertou!\n";
?>