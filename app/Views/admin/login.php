<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shreyu.coderthemes.com/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 19:47:58 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Log In | GRUPO ES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/assets/images/grupoes.png">

    <!-- App css -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="admin/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-12 p-4">
                                    <div class="mx-auto text-center">
                                        <a href="/panel">
                                            <img src="admin/assets/images/logo-dark.svg" alt="" height="64" />
                                        </a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-3">Bienvenido!</h6>
                                    <p class="text-muted mt-1 mb-3">
                                        Ingrese su usuario y contraseña para acceder al panel de administración.
                                    </p>

                                    <form id="formLogin" class="authentication-form">
                                        <div class="mb-3">
                                            <label class="form-label">Usuario</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese su usuario" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>

                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 text-center d-grid">
                                            <button class="btn btn-primary" type="submit">Acceder</button>
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="admin/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="admin/assets/js/app.min.js"></script>

    <script src="admin/assets/js/login.js"></script>

</body>

</html>