<?php
$acimaLimite = 0;

for ($i = 1; $i <= 12; $i++) {
    $faltas = (int) readline("Digite a quantidade de faltas do aluno $i: ");
    
    if ($faltas <= 15) {
        echo "Aluno $i: Dentro do limite de faltas. ";
    } else {
        echo "Aluno $i: ACIMA do limite de faltas. ";
        $acimaLimite++;
    }
}

echo "Total de alunos que ultrapassaram o limite: $acimaLimite";
?>