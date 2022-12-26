<?php

require "./Users.php";

$users = new Users();
$list_users = $users->fetch();

foreach ($list_users as $key => $user) {
    echo "ID: {$user['id']} <br/>";
    echo "Nome: {$user['name']}  <br/>";
    echo "Email: {$user['email']}  <br/>";
    echo "<hr>";
}
