<?php

session_start();

require "config.php";

require "classes/message.php";
require "classes/bootstrap.php";
require "classes/controller.php";
require "classes/model.php";

require "control/home.php";
require "control/users.php";
require "control/share.php";

require "model/homeModel.php";
require "model/usersModel.php";
require "model/shareModel.php";
require "model/produto.php";

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
    $controller->executeAction();
}

?>