<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="../css/produto.css">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="../JS/funcoes.js"></script>
    </head>

    <body>

        <main>
            <?php
                include_once('./includes/menu.php');
            ?>
            <div class="msn_entrada">
                <h1>Produtos:</h1>
                <hr>
            </div>

            <div class="container-fluid">

                <div class="container">
                    <h2 class="h2">Categorias</h2>
                    <div class="list-group">
                        <li class="list-group-item" onclick="exibir_todos('todos')">Todos (12)</li>
                        <li class="list-group-item" onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                        <li class="list-group-item" onclick="exibir_categoria('fogao')">Fogões (2)</li>
                        <li class="list-group-item" onclick="exibir_categoria('microondas')">Microondas (3)</li>
                        <li class="list-group-item" onclick="exibir_categoria('lavaroupas')">Lavadoura de roupas (2)</li>
                        <li class="list-group-item" onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
                        <a href="pedidos.php" class="btn btn-primary">Solicitar Envio</a>
                    </div>
                </div>

                <section class="produtos">
                    <?php

                        require_once './actions/conexao.php';

                        $data = query("SELECT * from produtos;");
                        

                        while($row = mysqli_fetch_assoc($data)) {        
                    ?>

                        <div class="box_produto" id="<?php echo $row["categoria"]; ?>">
                            <img class="produtos" src="<?php echo $row["imagem"]; ?>" width="200px" height="200px" onclick="destaque(this)"><br>
                            <p class="descricao"><?php echo $row["descricao"]; ?></p>
                            <hr>
                            <p class="descricao"><strike>R$ <?php echo $row["preco"]; ?></strike></p>
                            <p class="preco">R$ <?php echo $row["preco_venda"];?></p>
                        </div>
                                
                    <?php   
                        }
                    ?>

                    
                    
                </section>
            </div>

            <br><br><br><br><br>


        <footer class="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img src="https://1.bp.blogspot.com/-OgfYbeqVrrs/T9YJPOvu5uI/AAAAAAAACno/jg-6zRGn7Zs/s1600/pagamento.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
        </main>
    </body>
</html>