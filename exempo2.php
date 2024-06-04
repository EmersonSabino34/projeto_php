<?php
    $guia = "Mercado de Aplicativos";
    $h1 = "Mercado de Software";

    /*** Começandos os dados do produto */
        $nome_produto = "Rolls-Royce";
        $descricao_produto = "motor v8 600cv";
        $img_url_produto = "https://cdn.motor1.com/images/mgl/0bK33/s1/rolls-royce-cullinan.jpg";
        $preco_produto = 400000.00;

        $nome_produto1 = "Pc gamer";
        $descricao_produto1 = "i9 placa de video 4090";
        $img_url_produto1 = "https://thumb.pccomponentes.com/w-530-530/articles/1063/10634697/1669-volttierpc-pc-gaming-completo-amd-ryzen-5-5600g-16gb-1tb-ssd-monitor-24-teclado-raton-caracteristicas.jpg";
        $preco_produto1 = 2.00000;
        

    /*** Começandos os dados do serviços */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $guia ?> </title>
</head>
<body>
    <h1 class="">
        <?php echo $h1 ?>
    </h1>

    <div class="produtos">
        <div class="card-produtos">
            <img src=" <?= $img_url_produto ?> " width="100" alt="não achei a imagem">
            <h3> <?= $nome_produto ?> </h3>
            <p> <?= $descricao_produto ?> </p>
            <p>R$ <?= $preco_produto ?></p>
        </div>

        <div class="card-produtos">
            <img src=" <?= $img_url_produto1 ?> " width="100" alt="não achei a imagem">
            <h3> <?= $nome_produto1 ?> </h3>
            <p> <?= $descricao_produto1 ?> </p>
            <p>R$ <?= $preco_produto1 ?></p>
        </div>

    </div>

    <div class="servicos">
        <div class="card-servicos">
            <img src="" alt="">
            <h3>Serviço</h3>
            <p>Aula de PHP Básico</p>
            <p>R$ 100,00 horas</p>
        </div>
    </div>

    </div>

</body>
</html>