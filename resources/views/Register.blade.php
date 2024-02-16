<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image: url(https://mercadobinario.com.br/blog/wp-content/uploads/2021/11/comportamento-do-consumidor-e-tendencias.jpg);">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">

                    <a href="http://localhost/example-ap/public/inicio" class="d-flex justify-content-center mb-4">
                        <img src="https://www.logolynx.com/images/logolynx/s_36/36a3ce1577e7fd8577f4ecb917d8a137.jpeg" alt="" width="60">
                    </a>

                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Regístrate</h3>
                        <p class="text-secondary">¡Tus productos esperan por ti!</p>
                    </div>

                    <!-- Formulario de registro -->
                    <form method="POST" action="{{ route('validar-register') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-user'></i>
                            </span>
                            <input type="text" name="name" class="form-control form-control-lg fs-6" placeholder="Nombre y apellido" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-envelope'></i>
                            </span>
                            <input type="text" name="email" class="form-control form-control-lg fs-6" placeholder="Correo" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-lock-alt'></i>
                            </span>
                            <input type="password" name="password" class="form-control form-control-lg fs-6" placeholder="Contraseña" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">¡Regístrate!</button>
                    </form>
                    <!-- Fin del formulario de registro -->

                </div>
            </div>
        </div>
    </div>
</body>
</html>
