<?php
    if(isset($_POST['submit']))
    {
    include_once('cad-conexao.php');

    $Tipo = $_POST['tipo-rec'];
    $Valor = $_POST['valor'];
    $Descricao = $_POST['descricao'];
    $Data_recebimento = $_POST['data_recebimento'];

    $result = mysqli_query($conexao,"INSERT INTO receitas(tipo_receita,valor_receita,descricao_receita,data_recebimento) 
    VALUES ('$Tipo','$Valor','$Descricao','$Data_recebimento')");
    
    header('Location: list-receitas.php');
    }
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "formulários.css">
    <title>cadastro de receitas</title>
</head>
<body>
    <div class="box">
        <form action="cadastro-rec.php" method="POST">
            <fieldset>
                <legend> <b> Cadastro de receita </b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="tipo-rec" id="tipo-rec" class="inputUser" required>
                    <label for="tipo-rec" class="labelinput">Tipo de receita</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="valor" id="valor" class="inputUser" required>
                    <label for="valor" class="labelinput">Valor</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelinput">Descrição</label>
                </div>
                <br/>
                <div class="inputBox">
                <br/>
                    <label for="data_recebimento"><b>Data de recebimento:</b></label>
                    <input type="date" name="data_recebimento" id="data_recebimento" class="inputUser" required>
                </div>
                <br></br>
                <a href="receitas.php" class="link"> Voltar </a>
                <br></br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>