<?php 
function calculo_preco_venda($preco,$porcentagem){
$porcent = $porcentagem / 100; // %
$adicional = $porcent * $preco;

$valor_final = $preco + $adicional;

return $valor_final;
}

$valor_produto = '50.00';
$desconto = '15';
echo calculo_preco_venda($valor_produto,$desconto);