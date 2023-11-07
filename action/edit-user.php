<?php
require "../classes/Users.php";

//get data from form
$id = $_POST['user_id'];
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$username = $_POST['username'];

$user = new User;
$user->editUser($id, $f_name, $l_name, $username);
?>

