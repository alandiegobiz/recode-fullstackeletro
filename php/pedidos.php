<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="JS/funcoes.js"></script>
</head>
<body>
    <main>
    <?php
        include_once('./includes/menu.php');
    ?>
    <div class="msn_entrada">
        <h1>Pedidos:</h1>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h4>Cadastrar Pedidos</h4>
                <form action="./actions/infopedidos.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome_cliente">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="fone" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Produto:</label>
                        <input type="text" class="form-control" id="produto" name="descricao">
                    </div>
                    <div class="form-group">
                        <label for="preco_venda">Valor Unitário:</label>
                        <input type="text" onkeyup="calc_valor_final()" class="form-control" id="valor_unit" name="preco_venda">
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade:</label>
                        <input type="text" onkeyup="calc_valor_final()" class="form-control" id="qtd" name="quantidade">
                    </div>
                    <div class="form-group">
                        <label for="preco_final">Preço Final:</label>
                        <input type="text" class="form-control" disabled id="preco_final" name="preco_final">
                    </div>
                    <button type="submit" name="cadastrar" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </main>
</body>
</html>