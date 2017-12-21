<div class="panel panel-default">
    <div class="container">
        <div class="panel-heading text-center">
            <h3 class="panel-title">Cadastrar Usuário</h3><br />   
        </div>
        
        <div class="panel-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha1" class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Confirmar Senha</label>
                    <input type="password" name="senha2" class="form-control" required />
                </div>

                <br />

                <div class="text-right">
                    <a href="<?php echo ROOT_PATH; ?>" class="btn btn-danger">Cancelar</a>
                    <input type="submit" name="submit-register" value="Cadastrar" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>