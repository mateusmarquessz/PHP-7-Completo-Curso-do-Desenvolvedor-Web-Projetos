<div class="titulo"> Conversoes </div>


<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<p> Int para Float </p>';
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);


//float para int
echo '<p> Float para int </p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8, 10));
echo '<br>';
var_dump ((int) round(2.8));

//operacoes com string
echo '<p>String </p>';
echo '<br>';
var_dump( 3 + "2");