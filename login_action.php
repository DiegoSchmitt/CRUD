<?php
require 'parts/header.php';
include 'class/users.class.php';

$user = new Users;

if(isset($_POST['email']) && empty($_POST['email']) == false){
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $dsn = "mysql:dbname=crud;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    $data = $user->getEmail($email);
    $hash = $data['password'];

    if(password_verify($password, $hash)){
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        header('Location:painelDeControle.php');
        exit;
    }else{
        ?>
            <script>alert('Email ou senha incoretos!')</script>
        <?php
    }
}