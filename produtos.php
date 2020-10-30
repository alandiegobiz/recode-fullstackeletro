<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackeletro";

    // Criando a conexão com banco de dados Mysql

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    }
?>



<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <script src="JS/funcoes.js"></script>
    </head>
    <body>

        <main>
            <div class="menu_produtos">
                <?php
                    include_once('menu.html');
                ?>
            </div>

            <header>
                <br>
                <h1 class="categorias2">Produtos</h1>
                <br>
            </header>
            
            <br>
            <section class="categoria">

            <section class="categorias1">
                <h3>Categorias</h3>
                <ol>
                    <li onclick="exibir_todos('todos')">Todos (12)</li>
                    <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                    <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                    <li onclick="exibir_categoria('lavaroupas')">Lavadoura de roupas (2)</li>
                    <li onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
                </ol>
            </section>
                <div class="categorias">

                    <?php

                        $sql = "select * from produtos";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($rows = $result->fetch_assoc()){
                                
                    ?>

                        <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">
                            <img class="produtos" src="<?php echo $rows["imagem"]; ?>" width="200px" height="200px" onclick="destaque(this)"><br>
                            <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                            <hr>
                            <p class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></p>
                            <p class="preco">R$ <?php echo $rows["preco_venda"];?></p>
                        </div>
                                
                    <?php               
                            }
                        }
                        else {
                        echo "Nenhum produto cadastrado!";
                        }

                    ?>

                    
                    
                </div>
            </section>

            <br><br><br><br><br>


        <footer class="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img src="./imagens/formas_pagamento2.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
        </main>
    </body>
</html>