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
        pintar_sidebar("secretaria-denuncias-registrar");
        ?>

        <!-- Page Wrapper -->
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Registrar denuncia</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Secretaria</a></li>
                                <li class="breadcrumb-item active">Registrar nueva denuncia</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos del opositor</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Carlos Gonzales Rodriguez</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DNI</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: 77845961</span>
                                        </div>
                                        <label class="col-lg-3 col-form-label">Edad</label>
                                        <div class="col-lg-2">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: 50</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Distrito</label>
                                        <div class="col-lg-9">
                                        <select class="form-control" id="basicSelect">
                                            <option>Ancon</option>
                                            <option>Ate Vitarte</option>
                                            <option>Barranco</option>
                                            <option>Breña</option>
                                            <option>Carabayllo</option>
                                            <option>Chaclacayo</option>
                                            <option>Chorrillos</option>
                                            <option>Cieneguilla</option>
                                            <option>El Agustino</option>
                                            <option>Independencia</option>
                                            <option>Jesus María</option>
                                            <option>La Molina</option>
                                            <option>La Victoria</option>
                                            <option>Lima</option>
                                            <option>Lince</option>
                                            <option>Los Olivos</option>
                                            <option>Lurigancho</option>
                                            <option>Lurin</option>
                                            <option>Miraflores</option>
                                            <option>Pachacamac</option>
                                            <option>Pucusana</option>
                                            <option>S.J.Lurigancho</option>
                                            <option>S.J.Miraflores</option>
                                            <option>Surquillo</option>
                                            <option>V.M. del Triunfo</option>
                                            <option>V. el Salvador</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Direccion</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: Av./AA.HH/jr./urbanización</span>
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
                                    <label class="col-lg-3 col-form-label">Nombre</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                        <span class="form-text text-muted">ejm: Carlos Gonzales Rodriguez</span>
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
                                        <option>Calificador</option>
                                        <option>Alcalde</option>
                                        <option>Administrador del RC</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Codigo de expediente</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control">
                                        <span class="form-text text-muted">ejm: 123456</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="formFile" class="col-lg-3 col-form-label">Ingrese documento de prueba</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="file" id="formFile">
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