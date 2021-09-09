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
        include("contador-sidebar.php");
        pintar_sidebar("contador-pagos-registrar");
        ?>

        <!-- Page Wrapper -->
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Registrar nuevo pago</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="contador-perfil.php">Contador</a></li>
                                <li class="breadcrumb-item active">Registrar nuevo pago</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese los siguientes datos</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Antonella Vera</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DNI</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: 72930856</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: mailto@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Fecha</label>
                                        <div class="col-lg-9">
											<input type="text" id="date" class="form-control">
											<span class="form-text text-muted">dd/mm/yyyy</span>
                                            </div>
									</div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Monto</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: 100</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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