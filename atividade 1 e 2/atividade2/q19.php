<?php
$vel = 14;
$cansada = false;
$chovendo = false;
$ok = true;

if ($cansada && $vel > 15) {
    $ok = false;
}
if ($chovendo && $vel > 12) {
    $ok = false;
}
if ($vel < 10 || $vel > 20) {
    $ok = false;
}

if ($ok) {
    echo "Velocidade adequada";
} else {
    echo "Velocidade inadequada";
}
?>