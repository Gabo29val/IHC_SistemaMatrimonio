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
        pintar_sidebar("admin-tarifas");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Tarifas</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Tabla</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <?php
    include("footer.php");
    ?>
</body>

</html>