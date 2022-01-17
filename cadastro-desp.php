<?php
    if(isset($_POST['submit']))
    {
    include_once('cad-conexao.php');

    $Tipo = $_POST['tipo-desp'];
    $Valor = $_POST['valor'];
    $Data_pagamento = $_POST['data_pagamento'];

    $result = mysqli_query($conexao,"INSERT INTO despesas(tipo_despesa,valor_despesa,data_pagamento) 
    VALUES ('$Tipo','$Valor','$Data_pagamento')");
    
    header('Location: list-despesas.php');
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
        <form action="cadastro-desp.php" method="POST">
            <fieldset>
                <legend> <b> Cadastro de receita </b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="tipo-desp" id="tipo-desp" class="inputUser" required>
                    <label for="tipo-desp" class="labelinput">Tipo de despesas</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="number" name="valor" id="valor" class="inputUser" required>
                    <label for="valor" class="labelinput">Valor</label>
                </div>

                <div class="inputBox">
                <br/>
                    <label for="data_pagamento"><b>Data de pagamento:</b></label>
                    <input type="date" name="data_pagamento" id="data_pagamento" class="inputUser" required>
                </div>
                <br></br>
                <a href="despesas.php" class="link"> Voltar </a>
                <br></br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>