<?php 
include('../model/Conn.php');
include('../model/User_model.php');

$user = new User_model;

$login = $_POST['login'];
$password = $_POST['password'];

// echo $login. "<br>". $password;


$user->setLogin($login);
$user->setPassword($password);
$user->login();
    