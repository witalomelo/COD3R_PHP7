<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
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
                    <h3>Basico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integracao HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Inteiros</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Opearacoes Aritmeticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio">Desafio Aritmeticos</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=boolean">Boolean</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>