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
        include("admin-sidebar.php");
        pintar_sidebar("admin-empleados");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Administrar Empleados</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Empleados</a></li>
                                <li class="breadcrumb-item active">Administrar Empleados</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Añadir empleado</a>
                            <div class="view-icons">
                                <a href="admin-empleados.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                                <a href="admin-empleados-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">ID Empleado</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Nombre</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <select class="select floating">
                                <option>Seleccione cargo</option>
                                <option>Contador</option>
                                <option>Calificador</option>
                                <option>Secretaria</option>
                            </select>
                            <label class="focus-label">Cargo</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-custom2 btn-block"><i class="las la-search"></i> Buscar</a>
                    </div>
                </div>
                <!-- Search Filter -->

                <div class="row staff-grid-row">
                    <?php
                    include("admin-empleados-cargar-card.php");
                    ?>
                </div>

            </div>
            <!-- /Page Content -->

            <?php
            include("admin-empleados-add.php");
            include("admin-empleados-edit.php");
            include("admin-empleados-delete.php");
            ?>


        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <?php
    include("footer.php");
    ?>
</body>

</html>