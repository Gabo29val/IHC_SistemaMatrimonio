<!-- Add Requisito Modal -->
<div id="edit_requisito" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Requisito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">ID <span class="text-danger">*</span></label>
                                <input type="text" value="R001" readonly class="form-control floating">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="Solicitud">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Descripcion </label>
                                <textarea rows="5" cols="5" class="form-control" placeholder="Ingresa la descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus porro id beatae, maiores iure saepe temporibus nisi iste, a unde culpa veritatis. Ipsa obcaecati, quae voluptates velit aperiam sunt natus?
                                </textarea>
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
<!-- /Add Requisito Modal -->