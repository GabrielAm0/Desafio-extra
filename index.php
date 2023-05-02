<?php
include_once "core/core.php";
include_once "controller/LoginController.php";
include_once "controller/RegistroController.php";
include_once "controller/HomeController.php";
include_once "controller/RegisterController.php";
include_once "controller/UpdateController.php";
include_once "model/conexao.class.php";
include_once "vendor/autoload.php";
include_once "view/head.php";


$core = new Core();
echo $core->start($_GET);

const base_url = 'http://localhost/Desafio/';

?>

<html>
<link rel="stylesheet" href="assets/style/style.css">
</html>
