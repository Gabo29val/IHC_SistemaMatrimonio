<!-- Edit Tarifa Modal -->
<div id="edit_expediente" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Expediente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h4 class="card-title mb-0">Ingrese los nuevos datos</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">ID <span class="text-danger">*</span></label>
                                <input type="text" value="C001" readonly class="form-control floating">
                                <label class="col-form-label">Tipo de Matrimonio <span class="text-danger">*</span></label>
                                <!--<input class="form-control" type="text" value="">-->
                                <select class="form-control" id="basicSelect">
                                    <option>Matrimonio Civil Mayores de Edad</option>
                                    <option>Matrimonio Civil Menores de Edad</option>
                                    <option>Matrimonio Civil de Viudos</option>
                                    <option>Matrimonio Civil de Extranjeros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">DNI Contrayente Masculino <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="">
                                <label class="col-form-label">DNI Contrayente Femenino <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="">
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
<!-- /Edit Tarifa Modal -->