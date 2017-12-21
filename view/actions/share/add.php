<div class="panel panel-default">
    <div class="container">
        <div class="panel-heading text-center">
            <h3 class="panel-title">Adicionar Produtos</h3><br />   
        </div>
        
        <div class="panel-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" name="nome" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Preço</label>
                    <input type="number" step="0.01" name="valor" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="desc" class="form-control"></textarea>
                </div>

                <br />

                <div class="text-right">
                    <a href="<?php echo ROOT_PATH; ?>share" class="btn btn-danger">Cancelar</a>
                    <input type="submit" name="submit-add" value="Adicionar" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>