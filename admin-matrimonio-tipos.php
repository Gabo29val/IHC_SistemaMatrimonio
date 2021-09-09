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
        pintar_sidebar("admin-matrimonio-tipos");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Tipos</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Matrimonio</a></li>
                                <li class="breadcrumb-item active">Tipos</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_tipo"><i class="fa fa-plus"></i> Añadir Tipo </a>
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
                                            <th>Tipo</th>
                                            <th>Requisitos</th>
                                            <th class="text-right">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>T001</td>
                                            <td>Matrimonio Civil Mayores de Edad</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Solicitud</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Partida de Nacimiento</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> DNI de los contrayentes</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de domicilios</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de Solteria</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_tipo"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_tipo"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>T002</td>
                                            <td>Matrimonio Civil Menores de Edad</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Solicitud</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Partida de Nacimiento</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> DNI de los contrayentes</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de domicilios</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de Solteria</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_tipo"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_tipo"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>T003</td>
                                            <td>Matrimonio Civil de Viudos</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Solicitud</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Partida de Nacimiento</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> DNI de los contrayentes</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de domicilios</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de Solteria</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_tipo"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_tipo"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>T004</td>
                                            <td>Matrimonio Civil de Extranjeros</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Solicitud</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Partida de Nacimiento</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> DNI de los contrayentes</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de domicilios</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> Certificado de Solteria</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_tipo"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_tipo"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
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
            include("admin-matrimonio-tipos-add.php");
            include("admin-matrimonio-tipos-edit.php");
            include("admin-matrimonio-tipos-delete.php");
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