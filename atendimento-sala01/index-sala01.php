<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <title>Agendamento Sala Cliente</title>
     <!--Inicio nav bar-->

     <nav class="navbar navbar-expand-lg" style="background-color: #ffffffdc;">
                  <icon> 
                      <img src="../img/logolopes.png" alt="">
                  </icon>
              <div class="container-fluid">
                  <br>
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="../index.php"> Agendamentos</a>
                    <a class="nav-link" href="../agendamento.php"><h5>Atendimento</h5></a>
                    <a class="nav-link" href="../treinamento/index.php">Treinamento</a>
                  </div>
                </div>
              </div>
            </nav>
          <!--Fim Nav Bar-->

        <main>
        <div class="text-center">
          <h1 style="color: rgba(245, 5, 65, 0.829);">Agendamento Sala 01</h1>
          </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <form action="../conexao/salvar_data_01.php" method="post">
                    <!-- Inicio Projetor -->
                    <br>
                    <h5></h5>
                    <label for="">Precisa de Projetor?</label>
                    <select class="form-select" aria-label="Default select example" name="projetor">
                        <option selected></option>
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                    <br>
                    <!-- Fim projetor -->
                
                <div class="col-md-6">
                <h5></h5>
                <label for="Selecione a Hora">Selecione a Hora</label>
                <input type="text" class="form-control" id="timePicker" name="hora" placeholder="Selecione a Hora Desejada">
                <br>
                 </div>
                
                 <h5></h5>
                 <label for="Selecione a Data">Selecione a Data</label>
                <div class="col-md-6">
                    <!-- Enviar a data para o banco de dados -->
                    
                    <input type="text" class="form-control" id="datePicker" name="data" placeholder="Selecione a Data Desejada">
                    <br>
                </div>
               
                <div class="col-md-6">
                    <h5></h5>
                    <label for="Digite quantas pessoas irão participar">Quantidade de Pessoas</label>
                    <input type="text" name="pessoas" id="pessoas">
                    <br>
                    <br>
                    </div>
                     <div class="text-center">
                    <button type="submit" class="btn btn-danger">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="../atendimento-sala01/js/script.js"></script>
<br>
<br>

<footer>
  <?php
    include_once "../footer.php";
  ?>
</footer>
</body>
</html>
