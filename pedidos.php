<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="JS/funcoes.js"></script>
</head>
<body>
    <main class="pedidos">
        <div class="menu_produtos">
            <?php
                include_once('menu.html');
            ?>
        </div>
        
        <section class="container_solic">

            <div class="formulario bg-warning rounded">

                <form action="infopedidos.php" method="post">

                    <h1>Solicitação de pedido</h1>
                    <input type="text" name="nome_cliente" placeholder="Digite o seu nome completo" required>
                    <input type="text" name="endereco" placeholder="Digite o seu endereço" required>
                    <input type="text" name="telefone" placeholder="Digite seu telefone para contato" required>
                    <input type="text" name="descricao" placeholder="Digite a descricação do item selecionado" required>
                    <input type="text" name="preco_venda" placeholder="Digite o preço de venda" required>
                    <input type="text" name="quantidade" placeholder="Digite a quantidade desejada do item selecionado" required>
                    <button type="submit"><b>Solicite seu pedido</b></button>
                    <a href="produtos.php">Está com dúvida? De mais uma olhada em nossas <em>OFERTAS</em></a>
                    
                </form>

            </div>

        </section>

    </main>
</body>
</html>