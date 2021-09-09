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
        pintar_sidebar("secretaria-celebracion-reprogramar");
        ?>

       
        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Reprogramar celebraciones</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Secretaria</a></li>
                                <li class="breadcrumb-item active">Reprogramar celebraciones</li>
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
                                        <th>Nombre esposo</th>
                                        <th>DNI esposo</th>
                                        <th>Nombre esposa</th>
                                        <th>DNI esposa</th>
                                        <th>Fecha matrimonio</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="holiday-upcoming">
                                        <td>R001</td>
                                        <td>Mike Litorus</td>
                                        <td>44859682</td>
                                        <td>Lesley Grauer</td>
                                        <td>47359682</td>
                                        <td>22/09/2019</td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Reprogramar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="holiday-upcoming">
                                        <td>R002</td>
                                        <td>Jeffery Lalor</td>
                                        <td>75859682</td>
                                        <td>Tarah Shropshire</td>
                                        <td>74159682</td>
                                        <td>05/10/2020</td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Reprogramar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="holiday-upcoming">
                                        <td>R003</td>
                                        <td>Wilmer Deluna</td>
                                        <td>44859682</td>
                                        <td>Loren Gatlin</td>
                                        <td>47359682</td>
                                        <td>12/02/2005</td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Reprogramar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="holiday-upcoming">
                                        <td>R004</td>
                                        <td>Bernardo Galaviz</td>
                                        <td>75859682</td>
                                        <td>Catherine Manseau</td>
                                        <td>74159682</td>
                                        <td>25/07/2008</td>
                                        <td>
                                            <div class="leave-action">
                                                <button class="btn btn-sm btn-primary" type="button" href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fa fa-pencil m-r-5"></i> Reprogramar</button>
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

            <!-- Edit Holiday Modal -->
            <div class="modal custom-modal fade" id="edit_holiday" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar fecha de celebración</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!--
                                <div class="form-group">
                                    <label>Holiday Name <span class="text-danger">*</span></label>
                                    <input class="form-control" value="New Year" type="text">
                                </div>
                                -->
                                <div class="form-group">
                                    <label>Fecha matrimonio <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Edit Holiday Modal -->

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