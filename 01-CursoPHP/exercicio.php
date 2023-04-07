<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Recursos/estilo.css">
    <link rel="stylesheet" href="Recursos/exercicio.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exercicio</title>
</head>
<body class="exercicio">
        <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualizacao do Exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href="<?="{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatacao</a>
        <a href="index.php" class = "vermelho"> Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
               // include($_GET['dir'] . "/" .$_GET['file'] . ".php"); maneira 1 dinamicamente
               //include("{$_GET['dir']}/{$_GET['file']}.php");maneira 2 dinamicamente
               include(__DIR__ ."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?=date('Y'); ?>
    </footer>
    
</body>
</html>