<div class="titulo">Desafio Switch Case</div>

<form action="#" method="post">
    <input type="text" name="param" placeholder="Digite o valor">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km para Milha</option>
        <option value="milha-km">Milha para Km</option>
        <option value="metro-km">Metro para Km</option>
        <option value="km-metro">Km para Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
if (isset($_POST['param']) && isset($_POST['conversao'])) {
    $valor = floatval($_POST['param']);  // Converte o valor para float
    $conversao = $_POST['conversao'];

    switch ($conversao) {
        case 'km-milha':
            $resultado = $valor * 0.621371;
            echo "$valor Km são $resultado Milhas";
            break;
        case 'milha-km':
            $resultado = $valor / 0.621371;
            echo "$valor Milhas são $resultado Km";
            break;
        case 'metro-km':
            $resultado = $valor / 1000;
            echo "$valor Metros são $resultado Km";
            break;
        case 'km-metro':
            $resultado = $valor * 1000;
            echo "$valor Km são $resultado Metros";
            break;
        default:
            echo "Conversão inválida.";
            break;
    }
}
?>
