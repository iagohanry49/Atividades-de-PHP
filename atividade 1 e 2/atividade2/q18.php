<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Eiiii Acordaaaa ";
    } elseif ($i % 3 == 0) {
        echo "Eiiii ";
    } elseif ($i % 5 == 0) {
        echo "Acordaaaa ";
    } else {
        echo $i . " ";
    }
}
?>