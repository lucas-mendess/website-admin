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
    <title>Udemy PHP OO</title>
</head>

<body style="padding: 10px">
    <div style="padding: 20px 0">
        <a href="index.php">Lista de usuários</a>

        <h1>Editar do usuário</h1>
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
    ?>
        <form name="EditUser" action="" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

            <div style="margin-top: 5px;">
                <label for="name">Nome:</label>
                <input type="text" name="name" value="<?php echo $data['name'] ?>" id="name" />
            </div>
            <div style="margin-top: 5px;">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $data['email'] ?>" id="email" />
            </div>

            <button style="margin-top: 5px;" type="submit">
                Salvar
            </button>
        </form>
    <?php
    } else {
        echo "Nenhum dado encontrado <br/>";
        echo "<hr>";
    }

    $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if ($form) {
        $user = new User();
        $result = $user->edit($form);

        if ($result) {
            $_SESSION['msg'] = "<p style='color:green'>Usuário editado com sucesso!</p>";

            header("Location: index.php");
        } else {
            echo "<p style='color:red'>Ocorreu um erro ao editar</p>";
        }
    }
    ?>
</body>

</html>