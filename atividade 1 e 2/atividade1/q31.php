<?php
$qtdModelos = (int) readline("Digite a quantidade de modelos de IA: ");
$qtdTestes = (int) readline("Digite a quantidade de testes por modelo: ");

$maiorMediaGeral = -1;
$modeloMelhorDesempenho = 0;

for ($m = 1; $m <= $qtdModelos; $m++) {
    $somaNotasModelo = 0;
    
    echo "--- Avaliando Modelo $m --- ";
    
    for ($t = 1; $t <= $qtdTestes; $t++) {
        $nota = (float) readline("Digite a nota do teste $t (0 a 100): ");
        
        $somaNotasModelo += $nota;
        
        if ($nota < 50) {
            echo "Teste $t: Baixo ";
        } elseif ($nota < 80) {
            echo "Teste $t: Moderado ";
        } else {
            echo "Teste $t: Alto ";
        }
    }
    
    $mediaModelo = $somaNotasModelo / $qtdTestes;
    echo "Média do Modelo $m: " . number_format($mediaModelo, 2) . " ";
    
    if ($mediaModelo > $maiorMediaGeral) {
        $maiorMediaGeral = $mediaModelo;
        $modeloMelhorDesempenho = $m;
    }
}

echo "O modelo que obteve a maior média de desempenho foi o Modelo $modeloMelhorDesempenho com média " . number_format($maiorMediaGeral, 2) . ".";
?>