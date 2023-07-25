<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>
    <br>
    <br>

    <header class="container align-center">
       
    </header>
    <main>
        <section id="order">
            <div class="container flex-column align-center " id="form">
                <div class="sec-div">
<?php
include_once "../agendamento/conexao/conn.php";

$stmt = $conn->prepare("SELECT * FROM agendamento_sala01 ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php
   include_once "../agendamento/conexao/conn.php";
    /*include('session.php');*/
    $stmt = $conn->prepare("SELECT * FROM agendamento_sala01 ORDER BY id");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php

$stmt = $conn->prepare("SELECT * FROM agendamento_sala01 ORDER BY data_agendamento ASC"); 

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

/*include_once('header.php');*/

?>
				<h1 id="main-title" style="color: rgba(245, 5, 65, 0.829);">Agendamento Sala 01</h1>
				<div class="container">
					<table class="table" id="contacts-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Projetor</th>
								<th scope="col">Quantidade Pessoas</th>
								<th scope="col">Data</th>
                                <th scope="col">hora</th>
                                <th scope="col">Visualizar</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($results as $post) : ?>
								<tr>
									<td scope="row"><?= $post["id"] ?></td>
									<td scope="row"><?= $post["projetor"] ?></td>
									<td scope="row"><?= $post["quantidade_pessoas"] ?></td>
                                    <td scope="row"><?= $post["data_agendamento"] ?></td>
                                    <td scope="row"><?= $post["hora_agendamento"] ?></td>
									<td class="actions">
										<a href="views.php?id=<?= $post["id"] ?>">
										<ion-icon name="eye-outline" size="large" title="Ver"> </ion-icon>
										
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
			
<br>

        <!--Atendimento Sala 02-->
        <?php
include_once "../agendamento/conexao/conn.php";

$stmt = $conn->prepare("SELECT * FROM agendamento_sala02 ORDER BY id ASC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php
    include_once "../agendamento/conexao/conn.php";
    /*include('session.php');*/
    $stmt = $conn->prepare("SELECT * FROM agendamento_sala02 ORDER BY id");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php

$stmt = $conn->prepare("SELECT * FROM agendamento_sala02 ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

/*include_once('header.php');*/

?>
				<h1 id="main-title" style="color: rgba(245, 5, 65, 0.829);">Agendamento Sala 02</h1>
				<div class="container">
					<table class="table" id="contacts-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Projetor</th>
								<th scope="col">Quantidade Pessoas</th>
								<th scope="col">Data</th>
                                <th scope="col">hora</th>
                                <th scope="col">Visualizar</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($results as $post) : ?>
								<tr>
									<td scope="row"><?= $post["id"] ?></td>
									<td scope="row"><?= $post["projetor"] ?></td>
									<td scope="row"><?= $post["quantidade_pessoas"] ?></td>
                                    <td scope="row"><?= $post["data_agendamento"] ?></td>
                                    <td scope="row"><?= $post["hora_agendamento"] ?></td>
									<td class="actions">
										<a href="views.php?id=<?= $post["id"] ?>">
										<ion-icon name="eye-outline" size="large" title="Ver"> </ion-icon>
										
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				
               			
<br>
<br>

                <!--Agendamento Para Treinamento-->
                <?php
include_once "../agendamento/conexao/conn.php";

$stmt = $conn->prepare("SELECT * FROM treinamento ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php
include_once "../agendamento/conexao/conn.php";
    $stmt = $conn->prepare("SELECT * FROM treinamento ORDER BY id");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php

$stmt = $conn->prepare("SELECT * FROM treinamento ORDER BY data_agendamento ASC"); 

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>
				<h1 id="main-title" style="color: rgba(245, 5, 65, 0.829);">Treinamento</h1>
				<div class="container">
					<table class="table" id="contacts-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Projetor</th>
								<th scope="col">Quantidade Pessoas</th>
								<th scope="col">Data</th>
                                <th scope="col">hora</th>
                                <th scope="col">Visualizar</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($results as $post) : ?>
								<tr>
									<td scope="row"><?= $post["id"] ?></td>
									<td scope="row"><?= $post["projetor"] ?></td>
									<td scope="row"><?= $post["quantidade_pessoas"] ?></td>
                                    <td scope="row"><?= $post["data_agendamento"] ?></td>
                                    <td scope="row"><?= $post["hora_agendamento"] ?></td>
									<td class="actions">
										<a href="views.php?id=<?= $post["id"] ?>">
										<ion-icon name="eye-outline" size="large" title="Ver"> </ion-icon>
										
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
			</div></div>
<br>


                <!--Fim agendamento Treinamento-->
			</main>
		</div>
		</div>

        <div class="sec-img">
        </div>
        </section>
    </main>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
<br>
<br>

<div class="text-center">
                <form action="../logout.php" method="post">
                <button type="submit" class="btn btn-danger ">Sair</button></form></div>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    2023 Copyright - Lopes Bahia - CRECI 001882-J - CNPJ 24.868.409/0001-92 - Todos os direitos reservados.
</footer>
</html>