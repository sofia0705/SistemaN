<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('public/endor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="<?=  base_url('public/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                <form action="<?= base_url('login/validate')?>" method="POST">
                                <form id="frm-login">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group" id="email">
                                            <input type="email" name="email"  class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Correo Electronico">

                                                <div class="invalid-feedback">
    
                                                </div>
                                        </div>
                                        <div class="form-group" id="password">
                                            <input type="password" name="password"  class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">

                                                <div class="invalid-feedback">
    
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox"  class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar contraseña
                                                    </label>
                                            </div>
                                        </div>
                                        <a href="<?= base_url('dashboard') ?>" class="btn btn-primary btn-user btn-block">
                                            Acceso
                                        </a>
                                    
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('registro') ?>">Crear una cuenta!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('public/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>