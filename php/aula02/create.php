<?php
session_start();

ob_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuário</title>
</head>

<body style="padding: 10px">
    <div style="padding: 20px 0">
        <a href="index.php">Listar usuários</a>
    </div>

    <form name="CreateUser" action="" method="post">
        <div style="margin-top: 5px;">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" />
        </div>
        <div style="margin-top: 5px;">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" />
        </div>

        <button style="margin-top: 5px;" type="submit">
            Criar usuário
        </button>
    </form>
</body>

<?php
require "./User.php";

$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($form) {
    $user = new User();
    $result = $user->create($form);

    if ($result) {
        $_SESSION['msg'] = "<p style='color:green'>Usuário criado com sucesso!</p>";

        header("Location: index.php");
    } else {
        echo "<p style='color:red'>Ocorreu um erro ao criar</p>";
    }
}
?>

</html>