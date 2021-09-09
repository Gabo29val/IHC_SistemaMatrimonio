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
        include("calificador-sidebar.php");
        pintar_sidebar("calificador-expedientes-registrar");
        ?>

        <!-- Page Wrapper -->
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Registrar expediente</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Calificador</a></li>
                                <li class="breadcrumb-item active">Registrar nuevo expediente</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos del Contrayente Masculino</h4>
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
                                            <span class="form-text text-muted">ejm: 30</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre de la madre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Andrea Rodriguez Sifuentes</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre del padre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Francisco Gonzales Lopez</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Estado Civil</label>
                                        <div class="col-lg-9">
                                        <select class="form-control" id="basicSelect">
                                            <option>Soltero</option>
                                            <option>Viudo</option>
                                            <option>Divorciado</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Profesión</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Arquitecto</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Lugar de Nacimiento</label>
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
                                        <label class="col-lg-3 col-form-label">Dirección</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: Av./AA.HH/Jr./Urb.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nacionalidad</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Peruano</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos de la Contrayente Femenina</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Macarena Bustamante Melendez</span>
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
                                            <span class="form-text text-muted">ejm: 30</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre de la madre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Verónica Melendez Guerrero</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre del padre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Manuel Bustamante Ferreros</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Estado Civil</label>
                                        <div class="col-lg-9">
                                        <select class="form-control" id="basicSelect">
                                            <option>Soltero</option>
                                            <option>Viudo</option>
                                            <option>Divorciado</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Profesión</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Ingeniero</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Lugar de Nacimiento</label>
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
                                        <label class="col-lg-3 col-form-label">Dirección</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: Av./AA.HH/Jr./Urb.</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nacionalidad</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Peruano</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos del Primer Testigo</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Jesus Palomino Correa</span>
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
                                            <span class="form-text text-muted">ejm: 30</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Profesión</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Contador</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Dirección</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: Av./AA.HH/Jr./Urb.</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Ingrese datos del Segundo Testigo</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Coraima Montez Enriquez</span>
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
                                            <span class="form-text text-muted">ejm: 30</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Profesión</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">ejm: Administrador</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Dirección</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control">
                                            <span class="form-text text-muted">ejm: Av./AA.HH/Jr./Urb.</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Detalles Finales</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Tipo de Matrimonio</label>
                                        <div class="col-lg-9">
                                        <select class="form-control" id="basicSelect">
                                            <option>Matrimonio Civil Mayores de Edad</option>
                                            <option>Matrimonio Civil Menores de Edad</option>
                                            <option>Matrimonio Civil de Viudos</option>
                                            <option>Matrimonio Civil de Extranjeros</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Fecha del Matrimonio</label>
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
                        <!--<button class="btn btn-primary submit-btn">Guardar</button>-->
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cancelar</button>
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