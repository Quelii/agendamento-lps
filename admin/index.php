<?php
include_once "../conexao/conn.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Agendamento Sala Cliente</title>
</head>
<!--Inicio nav bar-->

    <nav class="navbar navbar-expand-lg" style="background-color: #ffffffdc;">
        <icon> 
            <img src="../img/logolopes.png" alt="logo" href="../index.php">
        </icon>
    <div class="container-fluid">
        <br>
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../index.php"> Agendamentos </a>
          <a class="nav-link" href="../agendamento.php">Atendimento</a>
          <a class="nav-link" href="../treinamento/index.php">Treinamento</a>
        </div>
      </div>
    </div>
  </nav>

  <body>
  <main>
    <div class="text-center">
        <h1 style="color: rgba(245, 5, 65, 0.829);">Cadastro</h1>
    </div>
    <br>
    <div class="container">
        <form class="row g-3" action="../conexão/insert.php" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" name="senha">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Digite o Nome" name="nome">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="inputCity" name="cargo">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Setor</label>
                <select id="inputState" class="form-select" name="setor">
                    <option selected></option>
                    <option>private</option>
                    <option>prontos</option>
                    <option>tenda</option>
                    <option>mrv</option>
                    <option>direcional</option>
                    <option>Interno - Clt</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">CRECI</label>
                <input type="text" class="form-control" id="inputZip" name="creci">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
  </body>





<br>



<?php

include_once "../footer.php";

?>

