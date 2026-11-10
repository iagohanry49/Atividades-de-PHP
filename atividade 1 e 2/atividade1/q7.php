<?php
$somaNotas = 0;
$i = 1;

while ($i <= 5) {
    $nota = (float) readline("Digite a nota do aluno $i: ");
    $somaNotas += $nota;
    $i++;
}

echo "A soma de todas as notas informadas é: $somaNotas\n";
?>