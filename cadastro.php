<?php
    require 'parts/header.php';
?>
    <div class="container">
    <h1>Cadastro</h1>
        <form action="cadastro_action.php" method="post">
            <div class="row">
                <div class="col-6 form-group">
                    <input id="name" type="text" name="name" class="form-control form-control" placeholder ="Digite seu Nome" />
                </div>
                <div class="col-6 form-group">
                    <input id="lastName" type="text" name="lastName" class="form-control form-control" placeholder ="Digite seu Sobrenome" />
                </div>
            </div>
            <div class="form-group">
                <input id="email" type="email" name="email" class="form-control form-control" placeholder ="Digite seu E-mail preferido" />
            </div>
            <div class="form-group">
                <input id="address" type="text" name="address" class="form-control form-control" placeholder ="Digite seu Endereço" />
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <input id="password" type="password" name="password" class="form-control form-control" placeholder = "Cadastre uma Senha"/>
                </div>
                <div class="col-6 form-group">
                    <input id="confirmPassword" type="password" name="confirmPassword" class="form-control form-control" placeholder = "Confirme a Senha"/>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
<?php
    require 'parts/footer.php';
?>