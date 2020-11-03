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
        $valor_total= $_POST['preco_venda'] * $_POST['quantidade'];

        $sql = "insert into pedidos (nome_cliente, endereco, telefone, descricao, preco_venda, quantidade, valor_total) values ('$nome_cliente', '$endereco', '$telefone', '$descricao', '$preco_venda', '$quantidade', '$valor_total')";
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
        <br><br><br><br>


        <h1>Compra efetuada com sucesso!</h1>

        <div 
    </main>
</body>
</html>