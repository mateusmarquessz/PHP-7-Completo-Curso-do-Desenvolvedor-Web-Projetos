<div class="titulo"> Valor por Referencia </div>


<?php

$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavelValor";
echo "$variavelValor";

//Atribuicao por Referencia
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";