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

    if (isset($_POST['nome']) && isset($_POST['msg'])) {
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);

    }

?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <link rel="stylesheet" type="text/css" href="./css/contato.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="JS/funcoes.js"></script>
    </head>
    <body>
        <main>
            <?php
                include_once('menu.html');
            ?>

            <div class="msn_entrada">
                <br>
                <h1>Fale conosco:</h1>
                <br>
            </div>
                <hr>
                <br>
        <nav class="container-fluid">
            <section class="contatos">
                <div class="contato">
                    <img src="https://cdn.pixabay.com/photo/2019/10/19/17/24/gmail-4561841_960_720.png"><br>
                    <p>contato@fullstackeletro.com</p>
                </div>
                <div class="telefone">
                    <img src="https://listafood.com.br/assets/img/pedfood-whatsapp-logo.png"><br>
                    <p>(11) 99999-9999</p>
                </div>
            </section>

            <br><br><br>
            <div class="container">
                <form method="post" action="" class="sugestao">
                    <div class="comentarios">
                        <h4>Nome: </h4>
                        <input type="text" name="nome" style="width: 500px"><br>
                        <h4>Mensagem: </h4>
                        <input type="text" name="msg" style="width: 500px; height: 100px"><br>
                        <input type="submit" name="submit" value="Enviar"><br>
                    </div>
                </form>
            </div>

            <?php

                $sql = "select * from comentarios";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()){
                        echo "Data: ". $rows['data']. "<br>";
                        echo "Data: ". $rows['nome']. "<br>";
                        echo "Data: ". $rows['msg']. "<br>";
                        echo "<hr>";
                    } 
                } else {
                        echo "Nenhum comentário ainda!";
                    }

            ?>


        </nav>
        <br><br>           
            <footer class="rodape">
                <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
                <img src="https://1.bp.blogspot.com/-OgfYbeqVrrs/T9YJPOvu5uI/AAAAAAAACno/jg-6zRGn7Zs/s1600/pagamento.png" alt="Formas de pagamento">
                <p>&copy; Recode Pro</p>
            </footer>
        </main>
    </body>
</html>