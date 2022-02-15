<?php
require 'parts/header.php';
include 'class/users.class.php';
$user = new Users();
$name =  addslashes($_POST['name']); //filter_input(INPUT_POST, 'name', FILTER_SANITAZE_SPECIAL_CHARS);
$lastName =  addslashes($_POST['lastName']); //filter_input(INPUT_POST, 'lastName', FILTER_SANITAZE_SPECIAL_CHARS);
$address =  addslashes($_POST['address']); //filter_input(INPUT_POST, 'address', FILTER_SANITAZE_SPECIAL_CHARS);
$email =  addslashes($_POST['email']); //filter_input(INPUT_POST, 'email', FILTER_VALIDAETE_EMAIL);
$password =  addslashes($_POST['password']); //filter_input(INPUT_POST, 'password');
$confirmPassword =  addslashes($_POST['confirmPassword']);//filter_input(INPUT_POST, 'confirmPassword');
if($name && $email && $password){
    if($user->existEmail($email) == false){
        if($password == $confirmPassword){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $user->add($name, $lastName, $email, $address, $password);
            header("Location: painelDeControle.php");
            exit;
        }else{
            ?>
                <script>alert("Senha não confere")</script>
            <?php
        }
    }else{
        ?>
            <script>alert("Já existe um cadastro com esse email!")</script>
        <?php
    }
}else{
        ?>
            <script>alert("Verifique se todos os campos foram preenchidos")</script>
        <?php
}