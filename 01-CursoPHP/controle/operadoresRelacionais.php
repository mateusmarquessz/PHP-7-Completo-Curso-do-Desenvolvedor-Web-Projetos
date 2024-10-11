<div class="titulo"> Operadores Relacionais</div>


<?php

$a = 5;
$b = 10;

// Igual (==)
if ($a == $b) {
    echo "\$a é igual a \$b\n";
} else {
    echo "\$a não é igual a \$b\n";
}

// Idêntico (===)
if ($a === $b) {
    echo "\$a é idêntico a \$b\n";
} else {
    echo "\$a não é idêntico a \$b\n";
}

// Diferente (!=)
if ($a != $b) {
    echo "\$a é diferente de \$b\n";
} else {
    echo "\$a não é diferente de \$b\n";
}

// Não idêntico (!==)
if ($a !== $b) {
    echo "\$a não é idêntico a \$b\n";
} else {
    echo "\$a é idêntico a \$b\n";
}

// Menor que (<)
if ($a < $b) {
    echo "\$a é menor que \$b\n";
} else {
    echo "\$a não é menor que \$b\n";
}

// Maior que (>)
if ($a > $b) {
    echo "\$a é maior que \$b\n";
} else {
    echo "\$a não é maior que \$b\n";
}

// Menor ou igual (<=)
if ($a <= $b) {
    echo "\$a é menor ou igual a \$b\n";
} else {
    echo "\$a não é menor ou igual a \$b\n";
}

// Maior ou igual (>=)
if ($a >= $b) {
    echo "\$a é maior ou igual a \$b\n";
} else {
    echo "\$a não é maior ou igual a \$b\n";
}

// Operador Nave espacial (<=>)
$resultado = $a <=> $b;
if ($resultado == -1) {
    echo "\$a é menor que \$b\n";
} elseif ($resultado == 0) {
    echo "\$a é igual a \$b\n";
} else {
    echo "\$a é maior que \$b\n";
}

?>
