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
        pintar_sidebar("secretaria-citas-lista");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Lista de citas</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-secretaria.php">Secretaria</a></li>
                                <li class="breadcrumb-item active">Lista de citas</li>
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
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>10577823</td>
                                                <td>Tiger Nixon</td>
                                                <td>01/01/2013</td>
                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td>10577824</td>
                                                <td>Garrett Winters</td>
                                                <td>01/01/2012</td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td>10477824</td>
                                                <td>Ashton Cox</td>
                                                <td>14/01/2002</td>
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td>10477456</td>
                                                <td>Cedric Kelly</td>
                                                <td>24/12/2002</td>
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td>10477159</td>
                                                <td>Airi Satou</td>
                                                <td>03/02/2004</td>
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td>10477753</td>
                                                <td>Brielle Williamson</td>
                                                <td>09/02/2007</td>
                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td>10987321</td>
                                                <td>Herrod Chandler</td>
                                                <td>15/02/2004</td>
                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td>45789321</td>
                                                <td>Rhona Davidson</td>
                                                <td>15/04/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td>45258749</td>
                                                <td>Colleen Hurst</td>
                                                <td>28/09/2019</td>
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td>45852179</td>
                                                <td>Angelica Ramos</td>
                                                <td>15/09/2019</td>
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td>45852741</td>
                                                <td>Bradley Greer</td>
                                                <td>15/08/2015</td>
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td>45852319</td>
                                                <td>Brenden Wagner</td>
                                                <td>21/07/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C013</td>
                                                <td>75852319</td>
                                                <td>Sonya Frost</td>
                                                <td>08/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C014</td>
                                                <td>85852319</td>
                                                <td>Jena Gaines</td>
                                                <td>08/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C015</td>
                                                <td>85852348</td>
                                                <td>Quinn Flynn</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C016</td>
                                                <td>85852348</td>
                                                <td>Charde Marshall</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C017</td>
                                                <td>85852348</td>
                                                <td>Haley Kennedy</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C018</td>
                                                <td>85852348</td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C019</td>
                                                <td>85852348</td>
                                                <td>Michael Silva</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C020</td>
                                                <td>85852348</td>
                                                <td>Paul Byrd</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C021</td>
                                                <td>85852348</td>
                                                <td>Gloria Little</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C022</td>
                                                <td>85852348</td>
                                                <td>Dai Rios</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C023</td>
                                                <td>85852348</td>
                                                <td>Jenette Caldwell</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C024</td>
                                                <td>85852348</td>
                                                <td>Yuri Berry</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C025</td>
                                                <td>85852348</td>
                                                <td>Caesar Vance</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C026</td>
                                                <td>85852348</td>
                                                <td>Doris Wilder</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C027</td>
                                                <td>85852348</td>
                                                <td>Gavin Joyce</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C028</td>
                                                <td>85852348</td>
                                                <td>Jennifer Chang</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C029</td>
                                                <td>85852348</td>
                                                <td>Fiona Green</td>
                                                <td>18/03/2020</td>
                                            </tr>
                                            <tr>
                                                <td>C030</td>
                                                <td>85852348</td>
                                                <td>Shou Itou</td>
                                                <td>18/03/2020</td>
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