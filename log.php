<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Piolardo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/prototipado/home.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/prototipado/Views/ventas/OrdenVenta.php">Ventas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <button type="button" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reportes
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/prototipado/Views/reporte/RVentas.php">Ventas</a></li>
                                    <li><a class="dropdown-item" href="/prototipado/Views/reporte/ventasCliente.php">Ventas Cliente</a></l>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <button type="button" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mantenimiento
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/prototipado/Views/mantenimiento/cliente.php">Cliente</a></li>
                                    <li><a class="dropdown-item" href="/prototipado/Views/mantenimiento/empleado.php">Empleado</a></l>
                                    <li><a class="dropdown-item" href="/prototipado/Views/mantenimiento/producto.php">Producto</a></li>
                                </ul>
                            </li>
                            <?php session_start();
                                echo (isset($_SESSION['id_user'])) ? '<li class="ms-auto">
                                <a class="nav-link" href="/prototipado/conf/login.php?logout">Cerrar Sesion</a>
                            </li>': '';
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="/prototipado/assets/js/js.js"></script>
    </body>
</html>