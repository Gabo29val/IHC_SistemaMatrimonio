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
        pintar_sidebar("secretaria-celebracion-lista");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Lista de celebraciones</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-secretaria.php">Secretaria</a></li>
                                <li class="breadcrumb-item active">Lista de celebraciones</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-0">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>DNI-Varon</th>
                                                <th>DNI-Mujer</th>
                                                <th>Fecha</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>10577823</td>
                                                <td>10577823</td>
                                                <td>01/01/2013</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td>10577824</td>
                                                <td>10577823</td>
                                                <td>22/09/2019</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td>10477824</td>
                                                <td>10577823</td>
                                                <td>22/09/2019</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td>10477456</td>
                                                <td>10577823</td>
                                                <td>24/12/2002</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td>10477159</td>
                                                <td>10577823</td>
                                                <td>03/03/2004</td>
                                                <td><span class="badge bg-inverse-danger">Cancelado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td>10477753</td>
                                                <td>10577823</td>
                                                <td>09/02/2007</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td>10987321</td>
                                                <td>10577823</td>
                                                <td>15/02/2004</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td>45789321</td>
                                                <td>10577823</td>
                                                <td>15/04/2020</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td>45258749</td>
                                                <td>10577823</td>
                                                <td>28/09/2019</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td>45852179</td>
                                                <td>10577823</td>
                                                <td>15/09/2019</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td>45852741</td>
                                                <td>10577823</td>
                                                <td>15/08/2015</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td>45852319</td>
                                                <td>10577823</td>
                                                <td>21/07/2020</td>
                                                <td><span class="badge bg-inverse-danger">Cancelado</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
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
</body>

</html>