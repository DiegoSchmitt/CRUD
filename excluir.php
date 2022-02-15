<?php
    require 'parts/header.php';
    include 'class/users.class.php';
    $user = new Users();
    $id = filter_input(INPUT_GET, 'id');
    if($id){
        $user->del($id);
    }
    header("Location: painelDeControle.php");
    exit;
?>