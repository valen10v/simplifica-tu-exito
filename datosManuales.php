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
                <h1 class="title">Gestion de Clientes</h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Datos adicionales manuales</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Datos</a></li>
                </ul>
                <style>
                    /* Contenedor principal */
                    .crear-perfil {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;

                        font-family: 'Arial', sans-serif;
                    }

                    /* Estilos del formulario */
                    .formulario__manuales {
                        background-color: #fff;
                        padding: 40px;
                        border-radius: 12px;
                        width: 100%;
                        max-width: 380px;
                        box-sizing: border-box;
                        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
                        transform: scale(1);
                        opacity: 0;
                        animation: fadeIn 0.6s ease-out forwards;
                    }

                    /* Animación para el formulario */
                    @keyframes fadeIn {
                        0% {
                            transform: scale(0.95);
                            opacity: 0;
                        }

                        100% {
                            transform: scale(1);
                            opacity: 1;
                        }
                    }

                    /* Título del formulario */
                    .formulario__manuales h2 {
                        text-align: center;
                        font-size: 26px;
                        margin-bottom: 25px;
                        color: #333;
                    }

                    /* Estilos de los inputs y select */
                    .formulario__manuales input,
                    .formulario__manuales select {
                        width: 100%;
                        padding: 14px;
                        margin-bottom: 18px;
                        border: 2px solid #ddd;
                        border-radius: 8px;
                        font-size: 16px;
                        color: #333;
                        transition: all 0.3s ease;
                        box-sizing: border-box;
                    }

                    /* Estilos de los inputs al estar enfocados */
                    .formulario__manuales input:focus,
                    .formulario__manuales select:focus {
                        border-color: #3a4fb3;
                        outline: none;
                        box-shadow: 0 0 8px rgba(58, 79, 179, 0.3);
                    }

                    /* Estilos del botón */
                    .formulario__manuales button {
                        width: 100%;
                        padding: 14px;
                        background-color: #007BFF;
                        color: #fff;
                        border: none;
                        border-radius: 8px;
                        font-size: 18px;
                        font-weight: bold;
                        cursor: pointer;
                        transition: background-color 0.3s ease, transform 0.3s ease;
                        box-sizing: border-box;
                    }

                    /* Efecto hover del botón */
                    .formulario__manuales button:hover {
                        background-color: #007BFF;
                        transform: translateY(-3px);
                    }

                    /* Efecto active del botón */
                    .formulario__manuales button:active {
                        transform: translateY(1px);
                    }

                    /* Estilos para los placeholders */
                    .formulario__manuales input::placeholder {
                        color: #aaa;
                        font-style: italic;
                    }

                    /* Estilos para el select */
                    .formulario__manuales select {
                        font-family: 'Arial', sans-serif;
                        color: #555;
                    }

                    /* Responsividad */
                    @media (max-width: 480px) {
                        .formulario__manuales {
                            width: 90%;
                            padding: 25px;
                        }

                        .formulario__manuales h2 {
                            font-size: 22px;
                        }
                    }
                </style>
                <section class="crear-perfil">
                    <form action="php/datosManuales.php" method="post" class="formulario__manuales">
                        <h2>Ingresar Datos Manuales</h2>
                        <input type="text" placeholder="Nombre Empresa" name="nombre_empresa">
                        <input type="text" placeholder="Nit" name="nit">
                        <input type="text" placeholder="Num Empleados" name="num_empleados">
                        <input type="text" placeholder="Num Practicantes" name="num_practicantes">
                        <!-- Campo tipo persona seleccionable -->
                        <label for="importa">¿Importa?</label>
                        <select name="importa" id="importa">
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                        <button>Regístrar Datos</button>
                    </form>


            </main>


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