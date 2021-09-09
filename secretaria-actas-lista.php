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
        pintar_sidebar("secretaria-actas-lista"); 
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Lista de actas</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-secretaria.php">Secretaria</a></li>
                                <li class="breadcrumb-item active">Lista de actas</li>
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
                                                <th>DNI hombre</th>
                                                <th>DNI mujer</th>
                                                <th>N° de expediente</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>12345684</td>
                                                <td>10577823</td>
                                                <td>956485</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td>76542356</td>
                                                <td>10577850</td>
                                                <td>563214</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td>75463245</td>
                                                <td>10477824</td>
                                                <td>523652</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td>01245236</td>
                                                <td>10577823</td>
                                                <td>123658</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td>12365478</td>
                                                <td>10477159</td>
                                                <td>125369</td>
                                                <td><span class="badge bg-inverse-danger">Cancelado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td>01245236</td>
                                                <td>10577823</td>
                                                <td>123658</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td>75463245</td>
                                                <td>10477824</td>
                                                <td>523652</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td>75463245</td>
                                                <td>10477824</td>
                                                <td>523652</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td>12345684</td>
                                                <td>10577823</td>
                                                <td>956485</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td>75463245</td>
                                                <td>10477824</td>
                                                <td>523652</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td>10477824</td>
                                                <td>45852741</td>
                                                <td>123456</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td>01245236</td>
                                                <td>10577823</td>
                                                <td>123658</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
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