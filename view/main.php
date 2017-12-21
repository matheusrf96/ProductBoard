<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ROOT_PATH; ?>view/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ROOT_PATH; ?>view/css/style.css" />
    <script type="text/javascript" src="<?php echo ROOT_PATH ?>view/js/jquery3.js"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH ?>view/js/bootstrap.js"></script>
</head>
<body>
    <nav class="nav navbar">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Product Manager </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?php echo ROOT_URL; ?>share">Gerenciar Produtos </a>
            </li>

        </ul>

        <?php if(isset($_SESSION['logado'])): ?>
            <div>
                <p>Bienvenue! <?php echo $_SESSION['usuario']['nome']; ?></p>
                <a href="<?php echo ROOT_URL; ?>users/logout">Logout </a>
            </div>
        <?php else : ?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo ROOT_URL; ?>users/login">Login </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo ROOT_URL; ?>users/register">Cadastrar </a>
                </li>
            </ul>
        <?php endif; ?>
    </nav>

    <div class="container">
        <?php Message::displayMsg(); ?>
        <?php require $view; ?>
    </div>
</body>
</html>