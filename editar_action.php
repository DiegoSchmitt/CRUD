<?php
require 'parts/header.php';
include 'class/users.class.php';
$user = new Users();
$id = $_SESSION['id']; 
$name =  addslashes($_POST['name']); //filter_input(INPUT_POST, 'name', FILTER_SANITAZE_SPECIAL_CHARS);
$lastName =  addslashes($_POST['lastName']); //filter_input(INPUT_POST, 'lastName', FILTER_SANITAZE_SPECIAL_CHARS);
$address =  addslashes($_POST['address']); //filter_input(INPUT_POST, 'address', FILTER_SANITAZE_SPECIAL_CHARS);
$email =  addslashes($_POST['email']); //filter_input(INPUT_POST, 'email', FILTER_VALIDAETE_EMAIL);
$password =  addslashes($_POST['password']); //filter_input(INPUT_POST, 'password');
$confirmPassword =  addslashes($_POST['confirmPassword']);//filter_input(INPUT_POST, 'confirmPassword');
if($id){
if($name && $email && $password){
    if($password == $confirmPassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $user->edit($id, $name, $lastName, $email, $address, $password);
        header("Location: painelDeControle.php");
    }
    else{
        echo "Senha e confirmação de senha não conferem";
    }
}
else{
    echo "necessário preencher todos os dados";
}
}