<?php 
// Formulário simples para inserir instituições

require_once __DIR__ . "/../app/controllers/InstituicaoController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new InstituicaoController();
    $controller->cadastrar();
}

?>