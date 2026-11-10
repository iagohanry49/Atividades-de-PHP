<?php
$pronta = true;
$sacas = 120;
$disponivel = true;
$reserva = false;
$manutencao = false;

if ($pronta && $sacas >= 100 && ($disponivel || $reserva) && !$manutencao) {
    echo "A maquina pode iniciar a colheita";
} else {
    echo "A maquina nao pode iniciar a colheita";
}
?>