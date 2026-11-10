<?php
$valor = (int) readline("Digite o valor que deseja sacar: ");

$notas10 = 0;
$notas2 = 0;
$restante = $valor;

for (; $restante >= 10; $restante -= 10) {
    $notas10++;
}

for (; $restante >= 2; $restante -= 2) {
    $notas2++;
}

if ($restante == 0) {
    echo "Saque realizado com sucesso! Notas de R$ 10,00: $notas10 | Notas de R$ 2,00: $notas2";
} else {
    echo "O saque não pode ser realizado com o valor exato utilizando apenas notas de R$ 10,00 e R$ 2,00.";
}
?>