<?php
include 'conn/connect.php'; // Inclui o arquivo de conexão

// Recebe os dados do formulário com segurança
$dataReserva = isset($_POST['dataReserva']) ? $_POST['dataReserva'] : '';
$horario = isset($_POST['horario']) ? $_POST['horario'] : '';
$numeroPessoas = isset($_POST['numeroPessoas']) ? (int)$_POST['numeroPessoas'] : 0;
$motivo = isset($_POST['motivo']) ? $_POST['motivo'] : '';
$nomeCompleto = isset($_POST['nomeCompleto']) ? $_POST['nomeCompleto'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

// Criptografa a senha
$senhaHash = password_hash($senha, PASSWORD_BCRYPT);

// Prepara a consulta SQL
$sql = "INSERT INTO reservas (data_reserva, horario, numero_pessoas, motivo, nome_completo, cpf, email, senha)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepara a instrução
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Erro na preparação da instrução: " . $conn->error);
}

// Faz a bindagem dos parâmetros
$stmt->bind_param("ssisssss", $dataReserva, $horario, $numeroPessoas, $motivo, $nomeCompleto, $cpf, $email, $senhaHash);

// Executa a instrução
if ($stmt->execute()) {
    echo "Reserva realizada com sucesso!";
} else {
    echo "Erro ao realizar a reserva: " . $stmt->error;
}

// Fecha a instrução e a conexão
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Realizada - Restaurante</title>
    <!-- Inclui o Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css" class="css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="fundofixo">
    <div class="container mt-5">
        <!-- Título -->
        <div class="jumbotron text-center">
            <h1 class="display-4">Reserva Realizada com Sucesso!</h1>
            <p class="lead">Sua reserva foi confirmada e estamos ansiosos para recebê-lo em nosso restaurante.</p>
            <hr class="my-4">
            <p>Para mais informações ou para cancelar sua reserva, entre em contato conosco.</p>
            <!-- Botão de retorno -->
            <a class="btn btn-success btn-lg" href="index.php" role="button">Voltar para a Página Inicial</a>
        </div>
    </div>

    <!-- Inclui o Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



