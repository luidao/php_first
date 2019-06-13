<?php 

// var_dump($_POST);
// if (isset($_POST['nome']) == "") {
//     echo "Preencha o campo nome<br>";
// }
// if (isset($_POST['preco']) == "") {
//     echo "preencha este campo <br>";
// }
// if (isset($_POST['min']) == "") {
//     echo "preencha este campo <br>";
// }
// if (isset($_POST['max']) == "") {
//     echo "preencha este campo <br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de estoque</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        .vermelho td {
            background-color: #fdb8b8;
        }
    </style>

</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                     <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
                     <a href="#" class="navbar-brand">yeah</a> </div>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-8">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">controle de estoque</a></li>
                        <li><a href="#">vendas</a></li>
                        <li><a href="#">contato</a></li>
                        <li><a href="cadastro01.php">Cadastro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de produtos</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="cadastro01.php" method="post">
    <label for="nome">Nome</label>
    <br>
    <input type="text" name="nome">
    <?php
    if (isset($_POST['nome']) == "") {
        echo "<br>Preencha o campo nome<br>";
    }
    ?>
    <br>
    <label for="preco">Preço</label> 
    <br>
    <input type="text" name="preco"> 
    <?php 
    if (isset($_POST['preco']) == "") {
        echo "<br>preencha este campo <br>";
    }
    ?>
    <br>
    <label for="min">Quantidade mínima</label> 
    <br>
    <input type="text" name="min"> 
    <?php 
    if (isset($_POST['min']) == "") {
        echo "<br>preencha este campo <br>";
    }
    ?>
    <br>
    <label for="max">Quantidade máxima</label> 
    <br>
    <input type="text" name="max"> 
    <?php 
    if (isset($_POST['max']) == "") {
        echo "<br>preencha este campo <br>";
    }
    ?>
    <br>
    <button>salvar</button>
    </form>
</body>
<footer class="text-center">
    <p>yeah stores</p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
</html>