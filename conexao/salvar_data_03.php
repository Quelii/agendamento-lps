<?php
 //requisitando 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $projetor = $_POST['projetor'];
    $quantidade_pessoas = $_POST['pessoas'];
    $data_agendamento = $_POST['data'];
    $hora_agendamento = $_POST['hora'];

    //convertendo
    $data_agendamento = date_create_from_format('d/m/Y', $data_agendamento);
    $data_agendamento = $data_agendamento ? $data_agendamento->format('Y-m-d') : null;

    // criando variaveis para conectar
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'agendamento_db';

    //conectando 
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    //checando

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    //preparando 
    $sql = "INSERT INTO treinamento (projetor, quantidade_pessoas, data_agendamento, hora_agendamento) VALUES ('$projetor','$quantidade_pessoas','$data_agendamento','$hora_agendamento')";

    //executando
    if (mysqli_query($conn, $sql)) {
        header("Location: ../views/views.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}