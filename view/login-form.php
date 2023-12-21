<?php

 // Iniciar a sessão
if (isset($_SESSION['name'])) {
    // Usuário está logado
    header("Location:home.php");
} else {
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>SGT Login</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/images/logos/COLEGIO_MEDAF__1_-removebg-preview.png" width="180" alt="">
                                </a>
                                <?php
                                // Verifique se há um parâmetro 'erro' na URL
                                if (isset($_GET['erro']) && $_GET['erro'] === 'senha_incorreta') {
                                    echo '<center><p style="color: red;">Email / Senha  incorreta. Tente novamente!</p></center>';
                                }
                                ?>
                                <p class="text-center">Seja bem vindo</p>
                                <form action="../controller/login.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="username" require id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" require id="exampleInputPassword1">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked="">
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Lembre-se deste dispositivo
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="#">Esqueceu sua senha?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Entrar </button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Novo na SGE?</p>
                                        <a class="text-primary fw-bold ms-2" href="register-form.php">Crie a sua conta aqui</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>