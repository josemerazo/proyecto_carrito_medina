<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto2</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
        }

        .navbar {
            background-color: #000000;
        }

        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #6c757d !important;
        }

        .navbar-nav .active {
            border-bottom: 2px solid #ffffff;
        }

        .badge-dark {
            background-color: #343a40;
        }

        .dropdown-menu {
            width: 300px;
            padding: 10px;
        }

        .list-group-item {
            background-color: #343a40;
            color: #ffffff;
            border: none;
        }

        .list-group-item:hover {
            background-color: #6c757d;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            UcsgEats
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/example-ap/public/inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 "  href="http://localhost/example-ap/public/shop">Explorar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 "  href="http://localhost/example-ap/public/cart">Carrito </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="#">Cuenta</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getContent()->count() }}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        @if(count(\Cart::getContent()) > 0)
                            <ul class="list-group">
                                @include('partials.cart-drop')
                            </ul>
                        @else
                            <p>Your Cart is Empty</p>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-9a6a87xBs4VoPkFgLBaXY76zjUh8fNv+r+sL4mG8ZF0kPx3Zl+M+pNG25JmNPyBw" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-yNgGL+MHToLlURJ45qqtaKAQ9zQdYvCWx1FVgPv4OX4qLkR92epJ98TO5QPjpU4b" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-GLhlTQ8iKDEtZbMCTZqFq8w5/UMYOqAaW8jW+g9MCTZq" crossorigin="anonymous"></script>

</body>
</html>
