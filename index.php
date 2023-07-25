<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Obtém as informações do usuário do banco de dados usando o ID da sessão
$servername = "localhost"; // ndereço do servidor
$username = "root"; //  nome de usuário do banco de dados
$password = ""; //  senha do banco de dados
$dbname = "agendamento_db"; // Nome do banco de dados 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM cadastro WHERE id = :user_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch();
} catch (PDOException $e) {
    echo "Erro ao obter informações do usuário: " . $e->getMessage();
    exit;
}
?>
<?php
include"navbar.php";
//pagina de apresentação das salas
?>
 <main>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <br>
        <div class="container">
            <div class="col-md-6" style="color: rgba(245, 5, 65, 0.829);">
                <h1 ><strong>Bem Vinda,</strong> <?php echo $user['nome']; ?></h1>
                <h5><strong></strong> <?php echo $user['cargo']; ?></h5>
              
            </div>
           
                </div>
            </div>
        </div>
  
   
    <!--Fim carrosel-->
</main>
 <!--Inicio Carrosel-->

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          
        <img src="../img/sala01.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em"></text></svg>        </div>
        <div class="carousel-item">
        <img src="../img/sala02.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em"></text></svg>
        </div>
        <div class="carousel-item active">
        <img src="../img/treinamento01.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em"></text></svg>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anterior</font></font></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Próximo</font></font></span>
      </button>
    </div>

      
  </body>
  <!--Fim carrosel-->
  <?php
  include_once "../agendamento/views/views02.php";

?>
</html>
