<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udemy PHP OO</title>
</head>

<body style="padding: 10px">
    <div style="padding: 20px 0">
        <a href="index.php">Lista de usuários</a>

        <h1>Detalhes do usuário</h1>
    </div>

    <?php
    require "./User.php";
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if (!$id) {
        return;
    }

    $user = new User();
    $data = $user->view($id);

    if ($data) {
        $date =  date('d/m H:i', strtotime($data['created_at']));
        echo "ID: {$data['id']}  <br/>";
        echo "Nome: {$data['name']}  <br/>";
        echo "Email: {$data['email']}  <br/>";
        echo "Cadastrado: {$user->formatDate($data['created_at'])} <br/>";

        if ($data['modify_at']) {
            echo "Atualizado em: {$user->formatDate($data['modify_at'])}  <br/>";
        }
    } else {
        echo "Nenhum dado encontrado <br/>";
        echo "<hr>";
    }

    ?>
</body>

</html>