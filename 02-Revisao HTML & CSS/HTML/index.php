<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Recursos/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Indice dos Exercicios</h2>
</header>
    <!-- classe.algo faz automatico, exemplo : main.principal, ele cria o valor a baixo -->
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulo 01 - Basico</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=teste&file=teste">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                        </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Modulo 02</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                        </ul>
                        </div>
                <div class="modulo azul">
                    <h3>Modulo 03</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                </ul>
                        </div>
                <div class="modulo roxo">
                    <h3>Modulo 04</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                </ul>
                        </div>   
                <div class="modulo laranja">
                    <h3>Modulo 05</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                </ul>
                         </div>
                <div class="modulo verde-escuro">
                    <h3>Modulo 06</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                 </ul>
                         </div>
                <div class="modulo vermelho-escuro">
                    <h3>Modulo 07</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                 </ul>
                        </div> 
                <div class="modulo azul-escuro">
                    <h3>Modulo 08</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                    </ul>
                        </div> 
                <div class="modulo roxo-escuro">
                    <h3>Modulo 09</h3>
                        <ul>
                            <li><a href="#">Exercicio A</a></li>
                            <li><a href="#">Exercicio B</a></li>
                            <li><a href="#">Exercicio C</a></li>
                                    </ul>
                        </div>     
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?=date('Y'); ?>
    </footer>
    
</body>
</html>