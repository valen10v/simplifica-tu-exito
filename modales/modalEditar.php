    <div class="modal fade" id="editarEmpleadoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulo_modal">Actualizar Información Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioEmpleadoEdit" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="id" id="idempleado" />
                        <div class="mb-3">
                            <label class="form-label">Cédula (NIT)</label>
                            <input type="text" name="cedula" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre_completo" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="text" name="correo" class="form-control" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">usuario</label>
                                <input type="text" name="usuario" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tipo Persona</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_persona" id="tipoPersona_natural" value="Natural" checked>
                                    <label class="form-check-label" for="tipoPersona_natural">
                                        Natural
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_persona" id="tipoPersona_juridico" value="Juridico">
                                    <label class="form-check-label" for="tipoPersona_juridico">
                                        Juridico
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" name="telefono" class="form-control" required />
                        </div>

                       

                        <div class="mb-3 mt-4">
                            <label class="form-label">Cambiar Foto del Usuario</label>
                            <input class="form-control form-control-sm" type="file" name="avatar" accept="image/png, image/jpeg" />
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn_add" onclick="actualizarEmpleado(event)">
                                Actualizar datos del usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
