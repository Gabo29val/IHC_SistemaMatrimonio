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
                        <a href="#"><i class="la la-user"></i> <span> Perfil de usuario</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "contador-perfil") {
                                                echo "active";
                                            } ?>" href="contador-perfil.php">Perfil Contador</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Administrar</span>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="las la-money-check-alt"></i></i> <span> Pagos </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "contador-pagos-lista") {
                                                echo "active";
                                            } ?>" href="contador-pagos-lista.php"><i class="las la-list-ol"></i><span style="margin-left: 10px;">Mostrar pagos</span></a></li>
                            <li><a class="<?php if ($select === "contador-pagos-registrar") {
                                                echo "active";
                                            } ?>" href="contador-pagos-registrar.php"><i class="la la-edit"></i><span style="margin-left: 10px;">Registrar nuevo pago</span></a></li>
                        </ul>
                    </li>
                    <!--
                    <li class="submenu">
                        <a href="#"><i class="las la-birthday-cake"></i> <span> Celebracion</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "secretaria-celebracion-lista") {
                                                echo "active";
                                            } ?>" href="secretaria-celebracion-lista.php"><i class="las la-list-ol"></i><span style="margin-left: 10px;">Mostrar lista</span></a></li>
                            <li><a class="<?php if ($select === "secretaria-celebracion-reprogramar") {
                                                echo "active";
                                            } ?>" href="secretaria-celebracion-reprogramar.php"><i class="las la-calendar"></i><span style="margin-left: 10px;">Reprogramar</span></a></li>
                            <li><a class="<?php if ($select === "secretaria-celebracion-cancelar") {
                                                echo "active";
                                            } ?>" href="secretaria-celebracion-cancelar.php"><i class="las la-ban"></i><span style="margin-left: 10px;">Cancelar</span></a></li>
                        </ul>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
<?php
}
?>