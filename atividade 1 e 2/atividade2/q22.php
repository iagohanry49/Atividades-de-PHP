<?php
$dia_renata = "terca";
$dia_israel = "quinta";

if ($dia_renata == "segunda") {
    echo "Renata: Horario nao pode ser alocado";
} else {
    echo "Renata: Aula alocada com sucesso";
}

echo " | ";

if ($dia_israel == "sexta") {
    echo "Israel: Horario nao pode ser alocado";
} else {
    echo "Israel: Aula alocada com sucesso";
}
?>