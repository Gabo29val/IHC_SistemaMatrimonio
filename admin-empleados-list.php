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
                                <a href="admin-empleados.php" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                                <a href="admin-empleados-list.php" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>ID Empleado</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th class="text-nowrap">Fecha ingreso</th>
                                        <th>Cargo</th>
                                        <th class="text-right no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                <a href="profile.html">Miguel Díaz <span>Administrador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0001</td>
                                        <td>migueldiaz@example.com</td>
                                        <td>9876543210</td>
                                        <td>01/01/2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                <a href="profile.html">Richard Rojas <span>Calificador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0002</td>
                                        <td>richardrojas@example.com</td>
                                        <td>9876543210</td>
                                        <td>18/03/2014</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                <a href="profile.html">John Flores <span>Calificador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0003</td>
                                        <td>johnflores@example.com</td>
                                        <td>9876543210</td>
                                        <td>01/04/2014</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                <a href="profile.html">Luis Alberto <span>Contador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0004</td>
                                        <td>luisalberto@example.com</td>
                                        <td>9876543210</td>
                                        <td>01/04/2014</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                <a href="profile.html">Wilder Sánchez <span>Contador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0005</td>
                                        <td>wildersanchez@example.com</td>
                                        <td>9876543210</td>
                                        <td>22/05/2014</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
                                                <a href="profile.html">Jeffrey Rodríguez <span>Calificador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0006</td>
                                        <td>jeffreyrodriguez@example.com</td>
                                        <td>9876543210</td>
                                        <td>16/06/2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
                                                <a href="profile.html">Bernardo Quispe <span>Contador</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0007</td>
                                        <td>bernardoquispe@example.com</td>
                                        <td>9876543210</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Calificador </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Calificador</a>
                                                    <a class="dropdown-item" href="#">Secretaria</a>
                                                    <a class="dropdown-item" href="#">Contador</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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