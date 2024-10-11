<div class="titulo"> Interpolacao </div>

<?php

$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";
$texto = "A sua nota e : $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tenho 5 { $objeto}s. mas perdi 3 {$objetos }s";