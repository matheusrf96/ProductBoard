<div>
    <?php if(isset($_SESSION['logado'])) : ?>
    <div class="text-center">
        <h1>Adicionar itens?</h1>
        <a href="<?php echo ROOT_URL; ?>share/add"><button class="btn btn-success">Add item</button></a>
    </div>

    <br />

    <div class="row container">
        <?php foreach($viewmodel as $item) : ?>
            <div class="item-prod">
                <h3><?php echo $item['nome']; ?></h3>
                <h6>R$ <?php echo $item['valor']; ?></h6>
                <h6><?php echo $item['descricao']; ?></h6>
            </div>
        <?php endforeach; ?>
    </div>
    <?php else : ?>
        <div class="text-center">
            <h1>Você não está logado :/</h1>
            <h3>Faça o login ou cadastre-se agora</h3>
        </div>
    <?php endif; ?>
</div>