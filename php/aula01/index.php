<?php
require "./User.php";

$user = new User();

$name = "Lucas";
$email = "lucas.mendes@gmail.com";
$message = $user->create($name, $email);

echo $message;