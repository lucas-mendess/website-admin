<?php 

require "./Users.php";

$users = new Users();
$list_users = $users->fetch();

print_r($list_users);