<?php
    if(isset($_POST['submit']))
    {
    include_once('cad-conexao.php');

    $Nome = $_POST['nome'];
    $Email = $_POST['email'];
    $Senha = $_POST['senha'];
    $Nome_do_banco = $_POST['banco'];
    $Tipo_de_conta = $_POST['conta'];
    $Data_de_nascimento = $_POST['data_nascimento'];

    $result = mysqli_query($conexao,"INSERT INTO cadastro(nome_usuario,email,senha,banco_usuario,conta_usuario,nasc_usuario) 
    VALUES ('$Nome','$Email','$Senha','$Nome_do_banco','$Tipo_de_conta','$Data_de_nascimento')" );
    
    header('Location: login.php');
    }
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "formulários.css">
    <title>cadastro de usuário</title>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend> <b> Cadastro de usuário </b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="banco" id="banco" class="inputUser" required>
                    <label for="banco" class="labelinput">Nome do banco</label>
                </div>
                <p>Tipo de conta:</p>
                <input type="radio" id="conta_c" name="conta" value="conta corrente">
                <label for="Feminino"> Conta corrente </label> 
                <br>
                <input type="radio" id="conta_s" name="conta" value="conta salario">
                <label for="Masculino"> Conta salário </label> 
                <br>
                <input type="radio" id="conta_p" name="conta" value="conta poupança">
                <label for="Masculino"> Conta poupança </label> 
                <div class="inputBox">
                <br/>
                    <label for="data_nascimento"><b>Data de nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
                <br></br>
                <a href="index.php" class="link"> Voltar </a>
                <br></br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>