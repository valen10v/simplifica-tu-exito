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
                    <li><a href="#">Crear Clientes</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Perfiles</a></li>
                </ul>

                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 20px;
                        background-color: #f9f9f9;
                    }



                    .breadcrumbs {
                        list-style: none;
                        padding: 0;
                        margin-bottom: 20px;
                    }

                    .breadcrumbs li {
                        display: inline;
                        margin-right: 5px;
                    }

                    .breadcrumbs li .divider {
                        margin: 0 5px;
                    }

                    .crear-perfil {
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 5px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    }

                    .crear-perfil h2 {
                        font-size: 20px;
                        margin-bottom: 15px;
                        color: #333;
                    }

                    .crear-perfil div {
                        margin-bottom: 15px;
                    }

                    .crear-perfil label {
                        display: block;
                        margin-bottom: 5px;
                        font-weight: bold;
                        color: #555;
                    }

                    .crear-perfil input {
                        width: 100%;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 3px;
                        font-size: 16px;
                    }

                    .crear-perfil button {
                        padding: 10px 15px;
                        background-color: #007BFF;
                        color: #fff;
                        border: none;
                        border-radius: 3px;
                        cursor: pointer;
                        font-size: 16px;
                    }

                    .crear-perfil button:hover {
                        background-color: #0056b3;
                    }

                    select[name="tipo_persona"] {
                        width: 100%;
                        /* Para que ocupe el mismo ancho que los demás campos */
                        padding: 10px;
                        /* Espaciado interno para que el texto no esté pegado al borde */
                        margin: 10px 0;
                        /* Margen superior e inferior para separar el campo de los otros elementos */
                        border: 1px solid #ccc;
                        /* Borde gris claro para un estilo sutil */
                        border-radius: 5px;
                        /* Bordes redondeados para una apariencia más suave */
                        font-size: 16px;
                        /* Tamaño de fuente adecuado para la legibilidad */
                        background-color: #f9f9f9;
                        /* Color de fondo suave */
                        color: #333;
                        /* Color del texto */
                        cursor: pointer;
                        /* Aparece un cursor tipo mano cuando el usuario pasa el mouse sobre el select */
                    }

                    select[name="tipo_persona"]:focus {
                        border-color: #0056b3;
                        /* Cambia el color del borde al enfocarlo */
                        outline: none;
                        /* Elimina el contorno predeterminado */
                    }
                </style>
                <section class="crear-perfil">
                    <form action="php/registroCliente.php" method="post" class="formulario__cliente">
                        <h2>Regístrar Cliente</h2>
                        <input type="text" placeholder="Cedula" name="cedula">
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <!-- Campo tipo persona seleccionable -->
                        <select name="tipo_persona">
                            <option value="natural">Persona Natural</option>
                            <option value="juridica">Persona Jurídica</option>
                        </select>
                        <input type="text" placeholder="Telefono" name="telefono">
                        <button>Regístrar cliente</button>
                    </form>
                </section>



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
    <script src="assets/js/script.js"></script>
</body>

</html>