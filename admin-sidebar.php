<?php
function pintar_sidebar($select)
{
?>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Inicio</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "admin-dashboard") {
                                                echo "active";
                                            } ?>" href="admin-dashboard.php">Admin Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-user"></i> <span> Perfil de usuario</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "admin-perfil") {
                                                echo "active";
                                            } ?>" href="admin-perfil.php">Mi perfil</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Administrar</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-users"></i> <span> Empleados</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "admin-empleados") {
                                                echo "active";
                                            } ?>" href="admin-empleados.php">Administrar Empleados</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="las la-gem"></i> <span> Matrimonio</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "admin-matrimonio-tipos") {
                                                echo "active";
                                            } ?>" href="admin-matrimonio-tipos.php"><i class="las la-sitemap"></i><span style="margin-left: 10px;">Tipos</span></a></li>
                            <li><a class="<?php if ($select === "admin-matrimonio-tarifas") {
                                                echo "active";
                                            } ?>" href="admin-matrimonio-tarifas.php"><i class="las la-ticket-alt"></i><span style="margin-left: 10px;">Tarifas</span></a></li>
                            <li><a class="<?php if ($select === "admin-matrimonio-requisitos") {
                                                echo "active";
                                            } ?>" href="admin-matrimonio-requisitos.php"><i class="las la-list-alt"></i><span style="margin-left: 10px;">Requisitos</span></a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
<?php
}
?>