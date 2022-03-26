<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">

</head>
<body class="exercicio">
    
    <header class="cabecalho">

        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>

    </header>

    <nav class="navegacao">
        <a href="<?php echo "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
        
            <?php include "{$_GET['dir']}/{$_GET['file']}.php" ?>

        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS © <?php echo date('Y'); ?>
    </footer>

</body>
</html>