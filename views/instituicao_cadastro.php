<?php 
// Formulário simples para inserir instituições

require_once __DIR__ . "/../app/controllers/InstituicaoController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new InstituicaoController();
    $controller->cadastrar();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title> Cadastro de Instituição</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Instuição de Caridade</h1>

        <?php if (isset($_GET['sucesso'])): ?>
            <p class="sucesso">Instituição cadastrada com sucesso!</p>
        <?php elseif (isset($_GET['erro'])): ?>
            <p class="erro">Ocorreu um erro ao cadastrar. Tente novamente.</p>
        <?php endif; ?>
    </div>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Descrição:</label>
        <textarea name="descricao"></textarea>

        <label>Cidade:</label>
        <input type="text" name="cidade">

        <label>Bairro:</label>
        <input type="text" name="bairro">

        <label>Endereço:</label>
        <input type="text" name="endereco">

        <label>Telefone:</label>
        <input type="text" name="telefone">

        <label>Email:</label>
        <input type="text" name="email">

        <label>Website:</label>
        <input type="text" name="website">

        <button type="submit">Cadastrar</button>
    </form>












</body>


</html>