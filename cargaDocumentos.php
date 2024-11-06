<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365° Simplifica tu Éxito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/menu.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Administrador</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Administración
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Pagina Principal
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Gestión de Clientes
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="creacionCliente.php" class="sidebar-link">Creación Perfil Cliente</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="datosManuales.php" class="sidebar-link">Datos adicionales manuales</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                            Gestión de Obligaciones Fiscales
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                            <li class="sidebar-item">
                                <a href="personaNatural.php" class="sidebar-link">Personas naturales</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="personaJuridica.php" class="sidebar-link">Personas jurídicas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="cumplimientos.php" class="sidebar-link collapsed" data-bs-target="#auth"
                            aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                            Checklist de cumplimiento
                        </a>

                    </li>
                    <li class="sidebar-header">
                        Gestionamientos
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                            Cotización y Contratos
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                                    data-bs-toggle="collapse" aria-expanded="false">Contratos</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="cotizaciones.php" class="sidebar-link">Generación de cotización</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="contratos.php" class="sidebar-link">Firma de contrato</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                            Gestión de Documentos
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                                    data-bs-toggle="collapse" aria-expanded="false">Docuemntación</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="cargaDocumentos.php" class="sidebar-link">Carga de documentos</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                            Gestión de Pagos
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                                    data-bs-toggle="collapse" aria-expanded="false">Pasarela de pago</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="opcionesPago.php" class="sidebar-link">Opciones de pago</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="confirmacionCierra.php" class="sidebar-link">Confirmación y cierre</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                            Obligaciones Especiales para Personas Naturales y Jurídicas
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                                    data-bs-toggle="collapse" aria-expanded="false">OBLIGACIONES</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="obligacionesNatural.php" class="sidebar-link">Personas naturales responsables de IVA</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="obligacionesEmp.php" class="sidebar-link">Obligaciones para pequeñas y medianas empresas</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">PERFIL</a>
                                <a href="php/cerrar_sesion.php" class="dropdown-item">SALIR</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- MAIN -->
            <main>
                <h1 class="title">Gestión de Docuementos</h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Subir</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Documentos</a></li>
                </ul>
               

                <div class="container">
                    <div class="position-absolute top-50 start-25 traslate-middle">
                        <h1 class="text-center mb-4">Subir documentos Pdf, Proximos a vencer</h1>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="file" name="documento" id="">
                            <input type="submit">
                        </form>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




<?php

$tamanio = 200;

if (isset($_FILES['documento']) && $_FILES['documento']['type'] == 'application/pdf') {

    if ($_FILES['documento']['size'] < ($tamanio * 1024)) {
        move_uploaded_file($_FILES['documento']['tmp_name'], 'documentos/' . $_FILES['documento']['name']);
        echo
        '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                 El documento se ha guardado correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        
        ';
    } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
               Error al subir el documento peso superior al permitido !.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        
        ';
    }
} else if (isset($_FILES['documento']) && $_FILES['documento']['type'] != 'application/pdf') {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
             Solo se admiten documentos PDF
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
    ';
}


?>
</form>

<style>
    /* Estilos generales */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .title {
        text-align: center;
        color: #333;
        margin-top: 20px;
        font-size: 2.5rem;
    }

    .breadcrumbs {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: center;
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .breadcrumbs li {
        display: inline;
        margin-right: 10px;
    }

    .breadcrumbs a {
        color: #007bff;
        text-decoration: none;
    }

    .breadcrumbs .divider {
        color: #6c757d;
    }

    .active {
        font-weight: bold;
        color: #28a745;
    }

    h2 {
        text-align: center;
        margin-top: 30px;
        font-size: 2rem;
        color: #333;
    }

    /* Tabla de fechas límite de documentos */
    table {
        width: 80%;
        margin: 30px auto;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    td {
        background-color: #f9f9f9;
    }

    td:last-child {
        text-align: center;
    }

    tr:nth-child(even) td {
        background-color: #f1f1f1;
    }

    tr:hover {
        background-color: #f0f0f0;
    }

    /* Contenedor principal */
    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        padding: 20px;
        margin-top: 40px;
        min-height: 100vh; /* Asegura que haya suficiente espacio */
    }

    /* Estilos para el formulario */
    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        margin: 20px 0; /* Separación entre otros elementos */
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form input[type="file"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    form input[type="submit"] {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    form input[type="submit"]:hover {
        background-color: #218838;
    }

    /* Estilos para las alertas */
    .alert {
        max-width: 600px;
        margin: 20px auto;
        border-radius: 8px;
        padding: 15px;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }

    .btn-close {
        color: #721c24;
        opacity: 0.7;
    }

</style>


</main>
<!-- MAIN -->

<a href="#" class="theme-toggle">
    <i class="fa-regular fa-moon"></i>
    <i class="fa-regular fa-sun"></i>
</a>
<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a href="#" class="text-muted">
                        <strong>Admin</strong>
                    </a>
                </p>
            </div>
            <div class="col-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">Contacto</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">Facebook</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">instagram</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">Nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/menu.js"></script>
</body>

</html>