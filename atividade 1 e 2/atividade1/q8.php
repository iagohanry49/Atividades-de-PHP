<?php
$opcao = -1;

while ($opcao != 0) {
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";
    
    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Opção selecionada: Cadastrar aluno.\n";
            break;
        case 2:
            echo "Opção selecionada: Consultar aluno.\n";
            break;
        case 3:
            echo "Opção selecionada: Excluir aluno.\n";
            break;
        case 0:
            echo "Saindo do programa...\n";
            break;
        default:
            echo "Opção inválida! Tente novamente.\n";
    }
}
?>