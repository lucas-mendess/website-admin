<?php
session_start();
ob_start();

require "./User.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if ($id) {
    $user = new User();
    $result = $user->delete($id);

    if ($result) {
        $_SESSION['msg'] = "<p style='color:green'>Usuário removido com sucesso!</p>";

        header("Location: index.php");
    } else {
        echo "<p style='color:red'>Ocorreu um erro ao remover</p>";
    }
}
