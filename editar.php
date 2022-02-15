<?php
    require 'parts/header.php';
    include 'class/users.class.php';
    $user = new Users;
    $id = filter_input(INPUT_GET, 'id');
    if($id){
        $info = $user->getId($id);
    }
?>
<h1>Editar usuário</h1>
<form action="editar_action.php" method="post">
            <div class="form-group">
                <input id="name" type="text" name="name" class="form-control form-control-lg" value='<?=$info['name']?>'/>
            </div>
            <div class="form-group">
                <input id="lastName" type="text" name="lastName" class="form-control form-control-lg" value='<?=$info['lastname']?>'/>
            </div>
            <div class="form-group">
                <input id="email" type="email" name="email" class="form-control form-control-lg" value='<?=$info['email']?>'/>
            </div>
            <div class="form-group">
                <input id="address" type="text" name="address" class="form-control form-control-lg" value='<?=$info['address']?>'/>
            </div>
            <div class="form-group">
                <input id="password" type="password" name="password" class="form-control form-control-lg" value='<?=$info['password']?>'/>
            </div>
            <div class="form-group">
                <input id="confirmPassword" type="password" name="confirmPassword" class="form-control form-control-lg" value='<?=$info['password']?>'/>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Alterar dados">
            </div>
        </form>
</form>