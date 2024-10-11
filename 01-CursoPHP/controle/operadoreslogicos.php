<div class="titulo"> Operadores Logicos</div>

<?php

$a = true;
$b = false;

// E lógico (AND) - Retorna true se ambos os operandos forem verdadeiros
if ($a and $b) {
    echo "\$a AND \$b é true\n";
} else {
    echo "\$a AND \$b é false\n";
}

// E lógico (&&) - Funciona como o AND, mas com maior precedência
if ($a && $b) {
    echo "\$a && \$b é true\n";
} else {
    echo "\$a && \$b é false\n";
}

// OU lógico (OR) - Retorna true se um dos operandos for verdadeiro
if ($a or $b) {
    echo "\$a OR \$b é true\n";
} else {
    echo "\$a OR \$b é false\n";
}

// OU lógico (||) - Funciona como o OR, mas com maior precedência
if ($a || $b) {
    echo "\$a || \$b é true\n";
} else {
    echo "\$a || \$b é false\n";
}

// XOR lógico - Retorna true se apenas um dos operandos for verdadeiro
if ($a xor $b) {
    echo "\$a XOR \$b é true\n";
} else {
    echo "\$a XOR \$b é false\n";
}

// Negação lógica (NOT) - Inverte o valor lógico
if (!$a) {
    echo "NOT \$a é true\n";
} else {
    echo "NOT \$a é false\n";
}
