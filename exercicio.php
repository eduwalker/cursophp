<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="exercicio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Curso PHP</title>
</head>

<body class="exercicio">

    <header class="cabecalho">
        <h1>Exercicio</h1>
        <h2>Visualizacao do Exercicio</h2>
    </header>

    <nav class="navegacao">
        <a href="#" class="verde">Sem formatacao</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo"> <!-- -->
           <?php
           include('teste/teste.php') //utilizado para trazer um arquivo php para dentro de outro arquivo
           ?>
        </div>
    </main>


    <footer class="rodape">
        COD3R & EDUARDO © <?= date('Y'); ?>
        <!--Utilizado para atualizar a data no ambito do ANO -->
    </footer>


</body>

</html>