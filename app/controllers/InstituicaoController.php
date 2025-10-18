<?php 
// Controlador responsável por receber dados do formulário e acionar o modelo

require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Instituicao.php";

class InstituicaoController {

    public function cadastrar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $database = new Database();
            $db = $database->getConnection();

            $instituicao = new Instituicao($db);
            $instituicao->nome = $_POST['nome'];
            $instituicao->descricao = $_POST['descricao'];
            $instituicao->cidade = $_POST['cidade'];
            $instituicao->bairro = $_POST['bairro'];
            $instituicao->endereco = $_POST['endereco'];
            $instituicao->telefone = $_POST['telefone'];
            $instituicao->email = $_POST['email'];
            $instituicao->website = $_POST['website'];

            if ($instituicao->criar()) {
                header("Location: /ajudaperto/views/instituicao_cadastro.php?sucesso=1");
                exit;
            } else {
                header("Location: /ajudaperto/views/instituicao_cadastro.php?erro=1");
                exit;
            }
        }
    }
}


?>