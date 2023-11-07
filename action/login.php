<?php

require "../classes/Users.php";
//get data from form
$username = $_POST['username'];
$password = $_POST['password'];

//make object
$user = new User;
//call function
$user->login($username, $password);
?>