<div class="panel panel-default">
    <div class="container">
        <div class="panel-heading text-center">
            <h3 class="panel-title">Login</h3><br />   
        </div>
        
        <div class="panel-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required />
                </div>

                <br />

                <div class="text-right">
                    <input type="submit" name="submit-login" value="Login" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>