<?php
$somaNotas = 0;
$totalAlunos = 5;

for ($i = 1; $i <= $totalAlunos; $i++) {
    $nota = readline("Digite a nota do aluno $i: ");
    $somaNotas += $nota;
}

$media = $somaNotas / $totalAlunos;
echo "A média da turma é: $media";
?>