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
        include("contador-sidebar.php");
        pintar_sidebar("contador-pagos-lista");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Lista de pagos</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="contador-perfil.php">Contador</a></li>
                                <li class="breadcrumb-item active">Lista de pagos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-0">
                            <!--<div class="card-header">
                                <h4 class="card-title mb-0">Default Datatable</h4>
                                <p class="card-text">
                                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                                </p>
                            </div>-->
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>N° Factura</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Fecha</th>
                                                <th>Monto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0001</a></td>
                                                <td>10577823</td>
                                                <td>Tiger Nixon</td>
                                                <td>1 Jan 2013</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0002</a></td>
                                                <td>10577824</td>
                                                <td>Garrett Winters</td>
                                                <td>1 Jan 2012</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0003</a></td>
                                                <td>10477824</td>
                                                <td>Ashton Cox</td>
                                                <td>14 Jan 2002</td>
                                                <td>S/.47.20</td>
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0004</a></td>
                                                <td>10477456</td>
                                                <td>Cedric Kelly</td>
                                                <td>24 Dic 2002</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0005</a></td>
                                                <td>10477159</td>
                                                <td>Airi Satou</td>
                                                <td>3 Feb 2004</td>
                                                <td>S/.47.20</td>
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0006</a></td>
                                                <td>10477753</td>
                                                <td>Brielle Williamson</td>
                                                <td>9 Feb 2007</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0007</a></td>
                                                <td>10987321</td>
                                                <td>Herrod Chandler</td>
                                                <td>15 Feb 2004</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0008</a></td>
                                                <td>45789321</td>
                                                <td>Rhona Davidson</td>
                                                <td>15 Abr 2020</td>
                                                <td>S/.47.20</td>
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-0009</a></td>
                                                <td>45258749</td>
                                                <td>Colleen Hurst</td>
                                                <td>28 Set 2019</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-00010</a></td>
                                                <td>45852179</td>
                                                <td>Angelica Ramos</td>
                                                <td>15 Set 2019</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-00011</a></td>
                                                <td>45852741</td>
                                                <td>Bradley Greer</td>
                                                <td>15 Aug 2015</td>
                                                <td>S/.206.50</td>
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td><a href="contador-pagos-reporte.php">#INV-00012</a></td>
                                                <td>45852319</td>
                                                <td>Brenden Wagner</td>
                                                <td>21 Jul 2020</td>
                                                <td>S/.206.50</td>
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