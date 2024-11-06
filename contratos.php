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
                <h1 class="title">Cotizaciones y Contratos </h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Cotizaciones</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Cotizaciones</a></li>
                </ul>

                <p>El cliente podrá aceptar la cotización y firmar el contrato electrónicamente desde la app.</p>
                <p>Datos de prueba:</p>

                <h2>CONTRATO DE ASESORÍA CONTABLE (DE PRUEBA)</h2>

                <p><strong>Entre:</strong></p>
                <p><strong>[Nombre del Cliente]</strong></p>
                <p>Domicilio: [Dirección del Cliente]</p>
                <p>RFC: [RFC del Cliente]</p>

                <p><strong>Y:</strong></p>
                <p><strong>[Nombre del Asesor]</strong></p>
                <p>Domicilio: [Dirección del Asesor]</p>
                <p>RFC: [RFC del Asesor]</p>

                <p><strong>1. OBJETO DEL CONTRATO</strong></p>
                <p>El Asesor se compromete a proporcionar servicios de asesoría contable al Cliente.</p>

                <p><strong>2. HONORARIOS</strong></p>
                <p>El Cliente pagará al Asesor la cantidad de [monto en moneda local] por los servicios prestados, a ser pagados [mensualmente/trimestralmente] dentro de los [días] siguientes a la presentación de la factura correspondiente.</p>

                <p><strong>3. FORMA DE PAGO</strong></p>
                <p>El pago se realizará mediante transferencia bancaria a la cuenta [número de cuenta] del Asesor, o a través de [especificar otra forma de pago, si aplica].</p>

                <p><strong>4. DURACIÓN</strong></p>
                <p>El contrato tendrá una duración de [especificar duración], comenzando el [fecha de inicio] y finalizando el [fecha de finalización].</p>

                <p><strong>Firmas:</strong></p>
                <p>_____________________________<br>[Nombre del Cliente]<br>[Fecha]</p>
                <p>_____________________________<br>[Nombre del Asesor]<br>[Fecha]</p>
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