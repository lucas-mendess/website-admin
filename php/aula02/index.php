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
        <a href="create.php">Criar um usuário</a>
    </div>

    <?php
    require "./Users.php";

    if (isset($_SESSION['msg'])) {

        echo  $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $users = new Users();
    $listUsers = $users->fetch();

    foreach ($listUsers as $key => $user) {
        echo "ID: {$user['id']} <br/>";
        echo "Nome: {$user['name']}  <br/>";
        echo "Email: {$user['email']}  <br/>";
        echo "<hr>";
    }
    ?>
</body>

</html>