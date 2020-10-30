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

    if (isset($_POST['nome_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['descricao']) && isset($_POST['preco_venda']) && isset($_POST['quantidade'])) {
        $nome_cliente = $_POST['nome_cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'];
        $preco_venda = $_POST['preco_venda'];
        $quantidade= $_POST['quantidade'];

        $sql = "insert into pedidos (nome_cliente, endereco, telefone, descricao, preco_venda, quantidade) values ('$nome_cliente', '$endereco', '$telefone', '$descricao', '$preco_venda', '$quantidade')";
        $result = $conn->query($sql);

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <script src="JS/funcoes.js"></script>
</head>
<body>
    <main class="pedidos">
        <div class="menu_produtos">
            <?php
                include_once('menu.html');
            ?>
        </div>
        
        <section class="painel-solic">

            <div class="formulario">

                <form action="#" method="post">

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