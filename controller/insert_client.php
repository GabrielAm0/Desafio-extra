<?php

include_once  '../model/conexao.class.php';
include_once  '../model/Manager.class.php';

$manager = new Manager();

$data = $_POST;

IF(isset($data) && !empty($data)){
    $manager->insertClient("registros", $data);
    header("Location: http://localhost/Desafio/home");
    echo '<script> alert("Cliente incluído com sucesso!");</script>';
}
