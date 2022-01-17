<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!doctype html> 
<html lang="pt-BR">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "sistema.css">
    <title>Home</title>
</head>

<body> 
<div class="nav">
    <div class="d-flex">
        <a href="start.php" class="btn">Sair da conta</a>
    </div>
    <div class="nav-title">
    <?php
        echo "<h1>Usuário: <u>$logado</u></h1>";
    ?>
    </div>
    </div>
</nav>
<br> <br>  <br> <br>
<div id="box-search" name="box-search" class="tabela" >
        <h1>Contas</h1>
        <a href="receitas.php" id="button" class="button"> <button class="button"> Receitas </button> </a> 
        <a href="despesas.php" id="button" class="button"> <button class="button"> Despesas </button> </a>
</div>
</body>
</html>