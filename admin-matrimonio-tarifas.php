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
        pintar_sidebar("admin-matrimonio-tarifas");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Tarifas</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Matrimonio</a></li>
                                <li class="breadcrumb-item active">Tarifas</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_tarifa"><i class="fa fa-plus"></i> Añadir Tarifa </a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Pago</th>
                                            <th>Tipo</th>
                                            <th class="text-right">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>T001</td>
                                            <td>S/.180</td>
                                            <td class="text-left">
                                                Derecho de tramite
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_tarifa"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_tarifa"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>T002</td>
                                            <td>S/.40</td>
                                            <td class="text-left">
                                                Rectificacion de expediente
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_tarifa"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_tarifa"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Content -->

            <?php
            include("admin-matrimonio-tarifas-add.php");
            include("admin-matrimonio-tarifas-edit.php");
            include("admin-matrimonio-tarifas-delete.php");
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