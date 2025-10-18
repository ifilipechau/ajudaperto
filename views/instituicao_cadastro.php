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
                <?php elseif (isset($_GET['erro'])): ?>
                    <div class="alert alert-danger text-center">
                       ❌ Ocorreu um erro ao cadastrar. Tente novamente.
                    </div>
                <?php endif; ?>

                <form method="POST" novalidate>
                    <div class="mb-3">
                        <label class="form-label">Nome da Instituição</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cidade</label>
                            <input type="text" name="cidade" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Bairro</label>
                            <input type="text" name="bairro" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input type="text" name="endereco" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Website</label>
                        <input type="text" name="website" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">
                           💾 Cadastrar Instituição
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="../public/index.php" class="text-decoration-none">&larr; Voltar à página inicial</a>
        </div>

        </div>
    </div>
   </div>

   <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>