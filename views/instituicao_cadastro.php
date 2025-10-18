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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body class="bg-light">
   <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

        <div class="card shadow-sm">
            <div class="card-header text-center bg-primary text-white">
                <h4>Cadastro de Instituição de Caridade</h4>
            </div>

            <div class="card-body">
                <?php if (isset($_GET['sucesso'])): ?>
                    <div class="alert alert-success text-center">
                       ✅ Instituição cadastrada com sucesso!
                    </div>
            </div>
        </div>
        </div>
    </div>
   </div>




</body>


</html>