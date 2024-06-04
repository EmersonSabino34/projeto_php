<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Aula Start PHP</title>

    <?php echo "<h3 class='text-white'> Exemplo 1 Aula Start PHP</h3>"; ?> <!-- mostrar uma informação no php -->

    <br> <!-- tag normal para quebrar linha -->

    <?="<h3 class='text-white'>  Exemplo 2 Aula Start PHP</h3>"; ?> <!-- mostrar uma informação no php -->

    <?php
        $nome = "Emerson";
        
        echo " <div class='text-white mt-5'> <h3>Exemplo 3 -  $nome</h3>   </div>";

        echo " <br> <div class='text-white'> <h3>Exemplo 3 -  $nome</h3>   </div> <br>";
    
    ?>

    <?php /** comentário multiplas linhas
            primary
            success
            warning
            danger
            dark
            info
         */
    ?>
</head>
<body class="bg-primary">
    <h1 class="text-white">PHP Start</h1>
</body>
</html>
