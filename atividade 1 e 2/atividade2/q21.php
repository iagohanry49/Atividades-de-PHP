<?php
$total_horas = 15;
$h_mixxy = 0;
$h_ninin = 0;
$turno = 1;
$restantes = $total_horas;

while ($restantes > 0) {
    if ($restantes >= 6) {
        $trabalhado = 6;
    } else {
        $trabalhado = $restantes;
    }
    
    if ($turno == 1) {
        $h_mixxy = $h_mixxy + $trabalhado;
        $turno = 2;
    } else {
        $h_ninin = $h_ninin + $trabalhado;
        $turno = 1;
    }
    
    $restantes = $restantes - $trabalhado;
}

echo "Mixxy-X789 trabalhou: " . $h_mixxy . " horas | Ninin-X989 trabalhou: " . $h_ninin . " horas";
?>