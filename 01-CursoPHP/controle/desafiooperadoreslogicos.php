<div class="titulo"> Desafio Operadores Logicos</div>



<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 terca</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="2">Nao Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 Quinta</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="2">Nao Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,select{
        font-size: 1.8rem;
    }
</style>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    echo "Trabalho 1: " . ($t1 == 1 ? "Executado" : "Não Executado") . "<br>";
    echo "Trabalho 2: " . ($t2 == 1 ? "Executado" : "Não Executado") . "<br>";

    if ($t1 == 1 && $t2 == 1) {
        echo "<p>Parabéns! Sorvete e TV de 50 polegadas.</p>";
    } elseif ($t1 == 1 || $t2 == 1) {
        echo "<p>Parabéns! Sorvete e TV de 32 polegadas.</p>";
    } else {
        echo "<p>Não ganhou nada.</p>";
    }
}
?>
