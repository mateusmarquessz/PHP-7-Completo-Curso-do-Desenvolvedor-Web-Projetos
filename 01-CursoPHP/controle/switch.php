<div class="titulo"> Switch Case</div>


<?php
$opcao = 2;

switch ($opcao) {
    case 1:
        echo "Você escolheu a opção 1.";
        break;
    case 2:
        echo "Você escolheu a opção 2.";
        break;
    case 3:
        echo "Você escolheu a opção 3.";
        break;
    default:
        echo "Opção inválida.";
        break;
}
?>
