<?php
    require 'parts/header.php';
    include 'class/users.class.php';
    $users = new Users;
    $info = $users->getAll();
    if($_SESSION == array()){
        header("Location:index.php");
        exit;
    }
?>
<div class="table-responsive">
<table class="table table-hover">
    <h1>Editar Usuário</h1>
    <h2>BEM VINDO <?=$_SESSION['name'];?></h2>
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>EMAIL</th>
            <th>ENDEREÇO</th> 
            <th>SENHA</th>
            <th>AÇÕES</th>   
        </tr>
    </thead>
    <tbody>
    <?php foreach($info as $users):?>
        <tr>
            <td><?=$users['id']; ?></td>
            <td><?=$users['name']; ?></td>
            <td><?=$users['lastname']; ?></td>
            <td><?=$users['email']; ?></td>
            <td><?=$users['address']; ?></td>
            <td><?=$users['password']; ?></td>
            <td>
                <a class="btn btn-outline-primary btn-sm" href="editar.php?id=<?=$users['id']; ?>">Editar</a>
                <a class="btn btn-outline-danger btn-sm" href="excluir.php?id=<?=$users['id']; ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<a class="btn btn-primary btn-lg" href='cadastro.php'>Adicionar Usuário</a>
<a class="btn btn-danger btn-lg" href='exit.php'>Sair</a>
<?php
    require 'parts/footer.php';
?>