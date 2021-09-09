<?php
include("head.php");
?>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php
        include("header.php");
        ?>

        <?php
        include("secretaria-sidebar.php");
        pintar_sidebar("secretaria-actas-registrar");
        ?>

        <!-- Page Wrapper -->
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Consumación</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Secretaria</a></li>
                                <li class="breadcrumb-item active">Consumación</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos de los contrayentes</h4>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Datos de la contrayente femenina</h2>
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Maritza Gonzales Rodriguez</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DNI</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: 77845961</span>
                                        </div>
                                    </div>
                                </form>
                                <h2 class="card-title">Datos del Masculino</h2>
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Carlos Rodriguez Diaz</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DNI</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: 77845961</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos del funcionario publico</h4>
                            </div>
                            <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">N°Acta</label>
                                    <div class="col-lg-9">
                                        <input readonly type="text" class="form-control" value="123654">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Carlos Rodriguez Diaz</span>
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">DNI</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control">
                                        <span class="form-text text-muted">ejm: 77845961</span>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Cargo</label>
                                    <div class="col-lg-9">
                                    <select class="form-control" id="basicSelect">
                                        <option>Sacerdote</option>
                                        <option>Alcalde</option>
                                        <option>Capitan</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
										<label class="col-lg-3 col-form-label">Fecha</label>
                                        <div class="col-lg-9">
											<input type="text" id="date" class="form-control">
											<span class="form-text text-muted">dd/mm/yyyy</span>
                                            </div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                        <button type="reset"
                            class="btn btn-light-secondary me-1 mb-1">Cancelar</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <?php
    include("footer.php");
    ?>
    <!-- Mask JS -->
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/mask.js"></script>
</body>

</html>