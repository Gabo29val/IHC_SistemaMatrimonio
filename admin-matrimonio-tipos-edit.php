<!-- Edit Tipo Modal -->
<div id="edit_tipo" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Tipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">ID Tipo <span class="text-danger">*</span></label>
                                <input type="text" value="FT-0001" readonly class="form-control floating">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Tipo <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="Matrimonio Civil Mayores de Edad">
                            </div>
                        </div>
                    </div>
                    <div class="form-group leave-duallist">
                        <div class="container d-flex">
                            <label style="flex-grow: 1;">Añadir Requisitos</label>
                            <label>Requisitos Actuales</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-sm-5">
                                <select name="edit_customleave_from" id="edit_customleave_select" class="form-control" size="5" multiple="multiple">
                                </select>
                            </div>
                            <div class="multiselect-controls col-lg-2 col-sm-2">
                                <button type="button" id="edit_customleave_select_rightAll" class="btn btn-block btn-white"><i class="fa fa-forward"></i></button>
                                <button type="button" id="edit_customleave_select_rightSelected" class="btn btn-block btn-white"><i class="fa fa-chevron-right"></i></button>
                                <button type="button" id="edit_customleave_select_leftSelected" class="btn btn-block btn-white"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" id="edit_customleave_select_leftAll" class="btn btn-block btn-white"><i class="fa fa-backward"></i></button>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <select name="customleave_to" id="edit_customleave_select_to" class="form-control" size="8" multiple="multiple">
                                    <option value="1">Solicitud </option>
                                    <option value="2">Partida de Nacimiento </option>
                                    <option value="2">DNI de los contrayentes </option>
                                    <option value="2">Certificado de domicilios </option>
                                    <option value="3">Certificado de Solteria </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /Edit Tipo Modal -->