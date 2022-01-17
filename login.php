<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "styles.css">
    <title>Login</title>
</head>
<body>
    <div id="login-container">
        <h1>Login</h1>
        <form action="log-conexao.php" method="POST">
            <label for="email">E-mail</label>
            <br>
            <input type="text" name="email" placeholder="Digite seu e-mail"> 
            <br>
            <label for="password"> Senha </label>
            <br>
            <input type="password" name="senha" placeholder="Digite sua senha">
            <a href="" class="link"> Esqueceu a senha? </a>
            <br> <br/>
            <a href="index.php" class="link"> Voltar ao index </a>
            <input class="inputSubmit" type="submit" name="submit" value="Login">
        </form>

    </div>
    </div>
</body>

</html>