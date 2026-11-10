<?php
for ($i = 1; $i <= 8; $i++) {
    $valorCompra = (float) readline("Digite o valor da compra do pedido $i: R$ ");
    
    if ($valorCompra >= 300.00) {
        $frete = 0.00;
        echo "Pedido $i: Frete Grátis (R$ 0,00) ";
    } elseif ($valorCompra >= 150.00) {
        $frete = 15.00;
        echo "Pedido $i: Valor do frete: R$ 15,00 ";
    } else {
        $frete = 25.00;
        echo "Pedido $i: Valor do frete: R$ 25,00 ";
    }
}
?>