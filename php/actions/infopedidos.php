<?php
        
    require_once './conexao.php';

    if (isset($_POST['nome_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['descricao']) && isset($_POST['preco_venda']) && isset($_POST['quantidade'])) {
        $nome_cliente = $_POST['nome_cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'];
        $preco_venda = $_POST['preco_venda'];
        $quantidade= $_POST['quantidade'];
        $valor_total= $_POST['preco_venda'] * $_POST['quantidade'];

        $sql = "INSERT INTO pedidos (nome_cliente, endereco, telefone, descricao, preco_venda, quantidade, valor_total) values ('$nome_cliente', '$endereco', '$telefone', '$descricao', '$preco_venda', '$quantidade', '$valor_total')";
        
        nonquery($sql);

        header("Location: ../produtos.php");

    }
    
?>