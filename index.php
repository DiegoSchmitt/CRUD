<?php
    require 'parts/header.php';
?>    
        <div class="container" style="width:400px;">
            <form action="login_action.php" method="post">
                <h2>Faça o login</h2>
                <div class="form-group">
                    <input id="email" type="email" name="email" class="form-control form-control-lg" placeholder ="Digite seu E-mail" />
                </div>
                <div class="form-group">
                    <input id="password" type="password" name="password" class="form-control form-control-lg" placeholder = "Digite sua Senha"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Entrar">
                </div>
                <p>Não possui cadastro?
                <a href='cadastro.php'>Clique aqui cadastre-se</a></p>
            </form>
        </div>
<?php
    require 'parts/footer.php';
?>