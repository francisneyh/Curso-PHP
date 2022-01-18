<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/CSS/style.css">
    </head>

    <body>
        
        <header class="cabecalho">
            <h1> Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Básico</h3>
                        <ul>                            
                            <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=html">Intergração HTML</a></li>
                            <li><a href="exercicio.php?dir=basico&file=css">Intergração CSS</a></li>
                            <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                        </ul>
                    </div>                    
                    <div class="modulo vermelho">
                        <h3>Tipos</h3>
                        <ul>                            
                            <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=desafioPrecedencia">Desafio Precedência</a></li>
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