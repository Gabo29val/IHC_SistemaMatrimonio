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
        pintar_sidebar("admin-perfil");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Perfil</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            <a href="#"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0">Miguel Díaz</h3>
                                                    <h6 class="text-muted">UI/UX Equipo</h6>
                                                    <small class="text-muted">Administrador</small>
                                                    <div class="staff-id">ID empleado : FT-0001</div>
                                                    <div class="small doj text-muted">Fecha de ingreso : 01/01/2013</div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="personal-info">
                                                    <li>
                                                        <div class="title">Celular:</div>
                                                        <div class="text"><a href="">9876543210</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Email:</div>
                                                        <div class="text"><a href="">migueldiaz@example.com</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Cumpleaños:</div>
                                                        <div class="text">24/07</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Dirección:</div>
                                                        <div class="text">1861 Cerdado Lima</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Género:</div>
                                                        <div class="text">Masculino</div>
                                                    </li>
                                                    
                                                    <!--<li>
                                                        <div class="title">Reports to:</div>
                                                        <div class="text">
                                                            <div class="avatar-box">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <a href="profile.html">
                                                                Jeffery Lalor
                                                            </a>
                                                        </div>
                                                    </li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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