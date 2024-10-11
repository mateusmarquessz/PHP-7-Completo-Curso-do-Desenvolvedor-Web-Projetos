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
                            <li>
                                <a href="exercicio.php?dir=basico&file=ola">Ola PHP</a>
                            </li>
                            <li><a href="exercicio.php?dir=basico&file=html">Integracao HTML com PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS com PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
                        </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Modulo 02 - Tipos</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=Tipos&file=int">Tipo Inteiro</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=float">Tipo Float</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=aritmeticas">Operacoes Aritmeticas</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=string">Tipos String</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=bolean">Tipos Boleano</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=conversoes">Conversoes</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=desafioprecedencia">Desafio Precedencia</a></li>
                            <li><a href="exercicio.php?dir=Tipos&file=desafiostring">Desafio String</a></li>
                        </ul>
                        </div>
                <div class="modulo azul">
                    <h3>Modulo 03 - Variaveis</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=Variaveis&file=variaveis">Variaveis</a></li>
                            <li><a href="exercicio.php?dir=Variaveis&file=desafiovariaveis">Desafio Variaveis</a></li>
                            <li><a href="exercicio.php?dir=Variaveis&file=atribuicoes">Atribuicoes</a></li>
                            <li><a href="exercicio.php?dir=Variaveis&file=interpolacao">InterPolacao</a></li>
                            <li><a href="exercicio.php?dir=Variaveis&file=variaveisvariaveis">Variaveis Variaveis</a></li>
                            <li><a href="exercicio.php?dir=Variaveis&file=valorporreferencia">Valor por Referencia</a></li>
                            <li><a href="exercicio.php?dir=Variaveis&file=constante">Constante</a></li>
                            </ul>
                        </div>
                <div class="modulo roxo">
                    <h3>Modulo 04 - Estruturas de Controles #1</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=controle&file=if & else">if & else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadoresRelacionais">Operadores Relacionais</a></li>
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