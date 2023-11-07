<?php
require "../classes/Users.php";

$user_id = $_POST['user_id'];

$user = new User;
$user->deleteUser($user_id);
?>