<?php
session_start();

// Verifica se o usuário já está logado, redireciona para a página de perfil
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost"; // Insira o endereço do servidor
    $username = "root"; // Insira o nome de usuário do banco de dados
    $password = ""; // Insira a senha do banco de dados
    $dbname = "agendamento_db"; // Nome do banco de dados criado anteriormente

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = $_POST["senha"];

        if (!$email) {
            echo "Endereço de email inválido.";
        } else {
            $sql = "SELECT id FROM cadastro WHERE email = :email AND senha = :senha";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);

            $stmt->execute();

            $result = $stmt->fetch();

            if ($result) {
                $_SESSION['user_id'] = $result['id'];
                header("Location: index.php");
                exit;
            } else {
                echo "Credenciais inválidas.";
            }
        }
    } catch (PDOException $e) {
        echo "Erro ao autenticar: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<nav>
    <img src="" alt="">
    <img src="img/ag.png" alt="agendamento">
</nav>
<body>
    <div class="text-center">
        <h2 style="color: rgba(245, 5, 65, 0.829);">  </h2>
        
        <br>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Imagem à esquerda -->
                <img src="img/Post imobiliária encontre sua casa nova.jpg" class="img-fluid float-left" alt="Imagem">
            </div>
            <div class="col-md-6">
                <!-- Formulário à direita -->
                <form action="login.php" method="post">
    
    <br>
    <h3 style="color: rgba(245, 5, 65, 0.829);">Login </h3>
    <br>
    <div class="mb-4">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Entre com um email válido</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>

    <div class="text-center"> <!-- Botão centralizado -->
        <button type="submit" class="btn btn-danger btn-lg">Acessar</button>
    </div>
</form>
                <!--fim campo login-->
            </div>
        </div>
    </div>

   
</body>
<br>
<br>
 <footer>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        2023 Copyright - Lopes Bahia - CRECI 001882-J - CNPJ 24.868.409/0001-92 - Todos os direitos reservados.
    </footer>
</html>
