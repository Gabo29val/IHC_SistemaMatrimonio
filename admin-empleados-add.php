<!-- Add Employee Modal -->
<div id="add_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Añadir Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="admin-empleados-add-valida.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- 
                            <div class="profile-img-wrap edit-img">
                                <img class="inline-block" src="assets/img/profiles/avatar-00.png" alt="user">
                                <div class="fileupload btn">
                                    <span class="btn-text">Editar</span>
                                    <input class="upload" type="file" id="image" name="image">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <input type="file" id="image" name="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Apellido </label>
                                <input class="form-control" type="text" name="apellido">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="username">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Contraseña </label>
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Confirmar Contraseña</label>
                                <input class="form-control" type="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">ID Empleado <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="id_empleado">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Fecha de ingreso <span class="text-danger">*</span></label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="fecha_ingreso"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Telefono </label>
                                <input class="form-control" type="text" name="telefono">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cargo <span class="text-danger">*</span></label>
                                <select class="select" name="cargo">
                                    <option>Selecciona cargo</option>
                                    <option>calificador</option>
                                    <option>secretaria</option>
                                    <option>contador</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" name="guardar-empleado" type="submit">Guardar</button>
                    </div>



                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Employee Modal -->