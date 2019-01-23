<?php

require_once "../controller/ControllerUsuario.php";
require_once "../model/Usuario.class.php";

$usuario = new Usuario();


if(isset($_POST['enviar'])){
    $usuario->setId($_POST['id']);
    $usuario->setPrimeironome($_POST['primeironome']);
    $usuario->setUltimonome($_POST['ultimonome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setTelefone($_POST['telefone']);
    ControllerUsuario::salvar($usuario);
    echo  "<script>alert('Cadastro realizado com sucesso!);</script>";
    header('Location: index.php');
}

?>


<!DOCTYPE html>


<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <style>
        h1.logo{
            font-family: 'Indie Flower', cursive;
            text-align: center;
            color: #28a745;
        }
        a{
            font-family: 'Indie Flower', cursive;
            font-size: 25px;
        }

        h2{
            font-family: 'Indie Flower', cursive;
        }
    </style>

    <title>Alimentação Saudável</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Quem Somos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dicas.php">Dicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="combate.php">Combate à doenças</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="receitas.php">Receitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="cadastrese.php">Cadastre-se</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="text-center col text-uppercase">
    <p>
        <h2>Cadastre-se e receba novidades</h2>
    </p>
</div>
<div class="container text-center col-md-5">
<form action="#" method="post">
    <div class="form-group">
        <input type="hidden" name="id">
            <div class="col-md-12 text-center">
                <label for="primeironome">Primeiro Nome</label>
                <input type="text" name="primeironome" class="form-control" id="primeironome" placeholder="Digite seu primeiro Nome">
            </div>
            <div class="col-md-12">
                <label for="segundonome">Último Nome</label>
                <input type="text" name="segundonome" class="form-control" id="segundonome" placeholder="Digite seu último nome">
            </div>
        <div class="col-md-12">
            <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="col-md-12">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="senha" placeholder="(00)0.0000-0000">
            </div>
    </div>
        <br>
        <div class="text-center">
            <button class="btn btn-success" type="submit" name="enviar">Enviar</button>
            <a href="cadastrese.php" class="btn btn-danger">Cancelar</a>

        </div>
    </div>

</form>
</div>

<br>
<br>
<br>
<footer class="position-sticky card-footer footer navbar-fixed-bottom">
    <h6 class="text-center bg-white">Alimente-se_Bem!</h6>
    <hr>
    <h6 class="text-center">INSTITUTO FEDERAL DE GOIÁS - IFG</h6>
    <h6 class="text-center bg-light">Desenvolvido por: Camilla Vanessa de Souza Bim | Profº: Renato Abreu | Ano: 2019 | Disciplina: P.I.IV</h6>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>