<?php
        
    require_once './conexao.php';

    if (isset($_POST['nome']) && isset($_POST['msg'])) {
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO comentarios (nome, msg) values ('$nome', '$msg')";

        nonquery($sql);

        header("Location: ../contato.php");
        

    }
    
?>