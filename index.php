<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Operações Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=boolean">
                                Tipo Boolean
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 03</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor vs Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y');?>
    </footer>
</body>
</html>