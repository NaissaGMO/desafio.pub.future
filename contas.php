<?php
    include_once('cad-conexao.php');
    
    $sql = "SELECT * FROM cadastro ORDER BY nome_usuario DESC";
    $result = $conexao->query($sql);
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
    <div class="nav-title">
    <H1>Contas cadastradas</H1>
    </div>
    <div class="d-flex">
        <a href="index.php" class="btn">Voltar ao index</a>
    </div>
    <div class="table">
  <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Banco</th>
        <th scope="col">Conta</th>
        <th scope="col">Nasc</th>
        <th scope="col">...</th>
        </tr>
    </thead>
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['nome_usuario']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['banco_usuario']."</td>";
            echo "<td>".$user_data['conta_usuario']."</td>";
            echo "<td>".$user_data['nasc_usuario']."</td>";
            echo  "<td>
                <a class='btn-sn btn-primary' href='edit-conta.php?' id='$user_data[id]' title='Editar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16' >
                <caminho d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65- .65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5a.5a. 5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a> 
                <a class='btn-sn btn-primary' href='delete-conta.php?' title='Excluir'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <caminho d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1 -1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a. 5,5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                </td>";
            echo  "</tr>" ;
        }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>