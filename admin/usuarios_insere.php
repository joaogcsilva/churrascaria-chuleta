<?php
include 'acesso_com.php';
include '../conn/connect.php';
// implementação backend a partir daqui...
 
if($_POST){
    if(isset($_POST['enviar']))
       
       
   
    $login = $conn->real_escape_string($_POST['login']);
    $senha = $_POST['senha'];
    $senha_hash = password_hash($senha, PASSWORD_BCRYPT);
    $nivel = $conn->real_escape_string($_POST['nivel']);
   
    $InsereUsuarios = "INSERT usuarios (login, senha,nivel)
    VALUES ('$login', '$senha_hash', '$nivel')";
    $resultado = $conn-> query($InsereUsuarios);
   
    }  
 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Usuarios - Insere </title>
</head>
<body>
<?php include "menu_adm.php";?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-info">
                <a href="usuarios_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo usuário
            </h2>
            <div class="thumbnail">
                <div class="alert alert-info" role="alert">
                    <form action="usuarios_insere.php" method="post"
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
                    <label for="descricao">Login:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="login" id="login"
                                class="form-control" placeholder="Digite o Login"
                                maxlength="100" required>
                        </div>  
                            <label for="descricao">Senha:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                           </span>
                           <input type="password" name="senha" id="senha"
                                class="form-control" placeholder="Digite a senha"
                                maxlength="100" required>
                        </div>  
                        <label for="nivel">Nível:</label>
                        <div class="input-group">
                            <label for="nivel_s" class="radio-inline">
                                <input type="radio" name="nivel" id="nivel" value="com" checked>Comum
                            </label>
                            <label for="nivel_n" class="radio-inline">
                                <input type="radio" name="nivel" id="nivel" value="sup" >Super
                            </label>
                        </div>
                     
 
                        <br>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
 
 
 
 
 
</body>
</html>