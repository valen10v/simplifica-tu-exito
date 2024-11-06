<div class="table-responsive">
    <table class="table table-hover" id="usuarios">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre</th>
                <th scope="col">correo</th>
                <th scope="col">usuario</th>
                <th scope="col">tipo Persona</th>
                <th scope="col">telefono</th>
                <th scope="col">Avatar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($empleados as $usuarios) { ?>
                <tr id="usuario_<?php echo $usuarios['id']; ?>">
                    <th scope='row'><?php echo $usuarios['id']; ?></th>
                    <td><?php echo $usuarios['cedula']; ?></td>
                    <td> <?php echo $usuarios['nombre_completo']; ?></td>
                    <td><?php echo $usuarios['correo']; ?></td>
                    <td><?php echo $usuarios['usuario']; ?></td>
                    <td><?php echo $usuarios['tipo_persona']; ?></td>
                    <td><?php echo $usuarios['telefono']; ?></td>

                    <td>
                        <?php
                        $avatar = $usuarios['avatar'];
                        if ($avatar == '') {
                            $avatar = 'assets/imgs/sin-foto.jpg';
                        } else {
                            $avatar = "acciones/fotos_empleados/" . $avatar;
                        }
                        ?>
                        <img class="rounded-circle" src="<?php echo $avatar; ?>" alt="<?php echo $usuarios['nombre_completo']; ?>" width="50" height="50">
                    </td>
                    <td>
                        <a title="Ver detalles del usuario" href="#" onclick="verDetallesEmpleado(<?php echo $usuarios['id']; ?>)" class="btn btn-success">
                            <i class="bi bi-binoculars"></i>
                        </a>
                       <!--  <a title="Editar datos del usuario" href="#" onclick="editarEmpleado(<?php echo $usuarios['id']; ?>)" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a title="Eliminar datos del usuario" href="#" onclick="eliminarEmpleado(<?php echo $usuarios['id']; ?>, '<?php echo $empleado['avatar']; ?>')" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a> -->
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>