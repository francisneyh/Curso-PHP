<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Exercício</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/CSS/style.css">
        <link rel="stylesheet" href="assets/CSS/exercicio.css">
    </head>

    <body class="exercicio">
        
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        <nav class="navegacao">
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
                class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">

                <?php
                    
                    // include('teste/teste.php') /*via include carrega o arquivo teste.php  = hard code o caminho*/
                    // include($_GET['dir'] ."/teste.php");
                    // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                    // include("{$_GET['dir']}/{$_GET['file']}.php");
                    // include("{$_GET['dir']}/{$_GET['file']}.php"); //qual o diretório quer carregar e o nome do do arquivo. carrega dinamicamente o arquivo php
                    // include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); //a variável __DIR__ pega o caminho absoluto

                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                                    
                ?>

            </div>

        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y'); ?>
        </footer>     
        
    </body>

</html>