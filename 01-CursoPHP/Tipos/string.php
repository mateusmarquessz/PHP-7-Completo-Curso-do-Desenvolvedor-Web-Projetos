<div class="titulo">Tipo String</div>


<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu tambem");
echo '<br>';

//concatenacao
echo "Nos tambem". ' somos';
echo '<br>', "Tambem aceito", " virgulas";

print ("<br> Tambem existe a funcao print");


//Algumas funcoes
echo '<br>' . strtoupper("maximizado");
echo '<br>' . strtolower("MINIMIZADO");
echo '<br>' . ucfirst("So a primeira letra");
echo '<br>' . ucwords("Todas as palavras");
echo '<br>' . strlen("Quantas Letras?");
echo '<br>' . mb_strlen("Eu Tambem", "utf-8");
echo '<br>' . substr("So uma parte mesmo", 7,6);
echo '<br>' . str_replace("Isso", "aquilo", "Trocar isso isso");