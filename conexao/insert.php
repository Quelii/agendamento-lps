<?php
$servername = "localhost"; // Insira o endereço do servidor
$username = "root"; // Insira o nome de usuário do banco de dados
$password = ""; // Insira a senha do banco de dados
$dbname = "agendamento_db"; // Nome do banco de dados criado anteriormente

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $cargo = $_POST["cargo"];
        $setor = $_POST["setor"];
        $creci = $_POST["creci"];
        $concordo_terminos = isset($_POST["gridCheck"]) ? 1 : 0;

        if (!$email) {
            die("Endereço de email inválido.");
        }

        // Use prepared statements para evitar SQL Injection
        $sql = "INSERT INTO cadastro (email, senha, nome, cargo, setor, creci, concordo_terminos)
                VALUES (:email, :senha, :nome, :cargo, :setor, :creci, :concordo_terminos)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cargo', $cargo);
        $stmt->bindParam(':setor', $setor);
        $stmt->bindParam(':creci', $creci);
        $stmt->bindParam(':concordo_terminos', $concordo_terminos);

        $stmt->execute();

        echo "Cadastro realizado com sucesso!";
    }
} catch (PDOException $e) {
    echo "Erro ao cadastrar: " . $e->getMessage();
}
?>
