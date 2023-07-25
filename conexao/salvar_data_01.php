<?php
// Checking the request method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $projetor = $_POST['projetor'];
    $quantidade_pessoas = $_POST['pessoas'];
    $data_agendamento = $_POST['data'];
    $hora_agendamento = $_POST['hora']; // Adding the time field

    // Converting date (d/m/Y to Y-m-d)
    $data_agendamento = date_create_from_format('d/m/Y', $data_agendamento);
    $data_agendamento = $data_agendamento ? $data_agendamento->format('Y-m-d') : null;

    // Database connection credentials
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'agendamento_db';

    // Connecting to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    // Checking the connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Preparing the SQL query
    $sql = "INSERT INTO agendamento_sala01 (projetor, quantidade_pessoas, data_agendamento, hora_agendamento) 
            VALUES ('$projetor', '$quantidade_pessoas', '$data_agendamento', '$hora_agendamento')";

    // Executing the SQL query
    if (mysqli_query($conn, $sql)) {
        header("Location: ../views/views.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Closing the database connection
    mysqli_close($conn);
}
?>
