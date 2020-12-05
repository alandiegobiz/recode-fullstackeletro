<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nossas lojas - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/nossaslojas.css">
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
                <h1>Nossas lojas:</h1>
                <hr>
            </div>

            
                <div class="container-fluid">
                    <div class="lojas border border-info rounded">
                        <h3>Rio de Janeiro</h3>
                        <p>Avenida Presidente Vargas, 5000</p>
                        <p>10 &ordm; andar</p>
                        <p>Centro</p>
                        <p>(21) 3333-3333</p>
                    </div>
                    <div class="lojas border border-info rounded">
                        <h3>São Paulo</h3>
                        <p>Avenida Paulista, 985</p>
                        <p>3 &ordm; andar</p>
                        <p>Jardins</p>
                        <p>(11) 4444-4444</p>
                    </div>
                    <div class="lojas border border-info rounded">
                        <h3>Santa Catarina</h3>
                        <p>Rua Major &Aacute;vila, 370</p>
                        <p>3 &ordm; andar</p>
                        <p>Vila Mariana</p>
                        <p>(47) 5555-5555</p>
                    </div>
                </div>


            <footer class="rodape">
                <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
                <img src="https://1.bp.blogspot.com/-OgfYbeqVrrs/T9YJPOvu5uI/AAAAAAAACno/jg-6zRGn7Zs/s1600/pagamento.png" alt="Formas de pagamento">
                <p>&copy; Recode Pro</p>
            </footer>
        </main>
     </body>
</html>