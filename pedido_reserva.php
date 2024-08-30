<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Reserva - Restaurante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        h1 {
            background-color: #343a40;
            color: white;
            padding: 20px;
            border-radius: 5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        .alert-danger h4 {
            background-color: #dc3545;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            color: #343a40;
        }
        .form-control {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
    </style>
</head>
<body class="fundofixo">
    <div class="container">
        <h1 class="text-center">Pedido de Reserva</h1>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-danger">Informações Importantes!</h4>
            <p><strong>Antecedência:</strong> As reservas devem ser feitas com no mínimo 24 horas e no máximo 30 dias de antecedência.</p>
            <p><strong>Limite por CPF:</strong> Um pedido de reserva por dia para o mesmo CPF.</p>
        </div>
        <form action="processar_reserva.php" method="post">
            <div class="alert alert-danger">
                <label for="dataReserva">Data da Reserva</label>
                <input type="date" class="form-control" id="dataReserva" name="dataReserva" required>
            </div>
            <div class="alert alert-danger">
                <label for="horario">Horário</label>
                <input type="time" class="form-control" id="horario" name="horario" required>
            </div>
            <div class="alert alert-danger">
                <label for="numeroPessoas">Número de Pessoas</label>
                <input type="number" class="form-control" id="numeroPessoas" name="numeroPessoas" min="1" required>
            </div>
            <div class="alert alert-danger">
                <label for="motivo">Motivo da Reserva (Opcional) - e.g., Aniversário, Casamento, Confraternização.</label>
                <input type="text" class="form-control" id="motivo" name="motivo">
            </div>
            <div class="alert alert-danger">
                <label for="nomeCompleto">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required>
            </div>
            <div class="alert alert-danger">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="alert alert-danger">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="alert alert-danger">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Enviar Pedido de Reserva</button>
        </form>
    </div>
</body>
</html>
