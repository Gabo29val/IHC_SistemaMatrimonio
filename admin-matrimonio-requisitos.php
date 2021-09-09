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
        pintar_sidebar("admin-matrimonio-requisitos");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Requisitos</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Matrimonio</a></li>
                                <li class="breadcrumb-item active">Requisitos</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_requisito"><i class="fa fa-plus"></i> Añadir Requisito </a>
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
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th class="text-right">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>R001</td>
                                            <td>Solicitud</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Suscipit quam iusto aliquam placeat velit consectetur nam <br /> praesentium in voluptatem atque laborum ratione, id magnam<br /> quidem! Fuga reprehenderit voluptatibus veritatis voluptatem.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_requisito"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_requisito"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>R002</td>
                                            <td>Partida de Nacimiento</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Suscipit quam iusto aliquam placeat velit consectetur nam <br /> praesentium in voluptatem atque laborum ratione, id magnam<br /> quidem! Fuga reprehenderit voluptatibus veritatis voluptatem.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_requisito"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_requisito"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>R003</td>
                                            <td>DNI de Contrayentes</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Suscipit quam iusto aliquam placeat velit consectetur nam <br /> praesentium in voluptatem atque laborum ratione, id magnam<br /> quidem! Fuga reprehenderit voluptatibus veritatis voluptatem.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_requisito"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_requisito"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>R004</td>
                                            <td>Certificación de Domicilio</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Suscipit quam iusto aliquam placeat velit consectetur nam <br /> praesentium in voluptatem atque laborum ratione, id magnam<br /> quidem! Fuga reprehenderit voluptatibus veritatis voluptatem.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_requisito"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_requisito"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>R005</td>
                                            <td>Certificación de Solteria</td>
                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        Ver
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Suscipit quam iusto aliquam placeat velit consectetur nam <br /> praesentium in voluptatem atque laborum ratione, id magnam<br /> quidem! Fuga reprehenderit voluptatibus veritatis voluptatem.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_requisito"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                    <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_requisito"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
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
            include("admin-matrimonio-requisitos-add.php");
            include("admin-matrimonio-requisitos-edit.php");
            include("admin-matrimonio-requisitos-delete.php");
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