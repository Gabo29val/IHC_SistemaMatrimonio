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
        pintar_sidebar("secretaria-celebracion-cancelar");
        ?>

        
        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Cancelar celebraciones</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Secretaria</a></li>
                                <li class="breadcrumb-item active">Cancelar celebraciones</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>DNI-Varon</th>
                                        <th>DNI-Mujer</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="holiday-upcoming">
                                        <td>R001</td>
                                        
                                        <td>44859682</td>
                                        
                                        <td>47359682</td>
                                        <td>22/09/2019</td>
                                        <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Cancelar</button>
                                            </div>
                                        </td>
                                        
                                    </tr>

                                    <tr class="holiday-upcoming">
                                        <td>R001</td>
                                        <td>44859682</td>
                                        <td>47359682</td>
                                        <td>22/09/2019</td>
                                        <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Cancelar</button>
                                            </div>
                                        </td>
                                        
                                    </tr>

                                    <tr class="holiday-upcoming">
                                        <td>R001</td>
                                        <td>44859682</td>
                                        <td>47359682</td>
                                        <td>22/09/2019</td>
                                        <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#delete_holiday"><i class="fa fa-trash-o m-r-5"></i> Cancelar</button>
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

            <!-- Delete Holiday Modal -->
            <div class="modal custom-modal fade" id="delete_holiday" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Cancelar celebración</h3>
                                <p>Seguro que desea cancelar esta celebración?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Sí</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Holiday Modal -->

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