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
                            <li><a class="<?php if ($select === "secretaria-perfil") {
                                                echo "active";
                                            } ?>" href="secretaria-perfil.php">Perfil secretaria</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Administrar</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="las la-calendar-check"></i> <span> Citas</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "secretaria-citas-lista") {
                                                echo "active";
                                            } ?>" href="secretaria-citas-lista.php"><i class="las la-list-ol"></i><span style="margin-left: 10px;">Mostrar citas</span></a></li>
                            <li><a class="<?php if ($select === "secretaria-citas-registrar") {
                                                echo "active";
                                            } ?>" href="secretaria-citas-registrar.php"><i class="la la-edit"></i><span style="margin-left: 10px;">Registrar nueva cita</span></a></li>
                        </ul>
                    </li>

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

                    <li class="submenu">
                        <a href="#"><i class="las la-folder-open"></i><span> Denuncias</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "secretaria-denuncia-lista") {
                                                echo "active";
                                            } ?>" href="secretaria-denuncia-lista.php"><i class="las la-list-ol"></i><span style="margin-left: 10px;">Mostrar denuncias</span></a></li>
                            <li><a class="<?php if ($select === "secretaria-denuncias-registrar") {
                                                echo "active";
                                            } ?>" href="secretaria-denuncias-registrar.php"><i class="la la-edit"></i><span style="margin-left: 10px;">Registrar denuncia</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="submenu">
                        <a href="#"><i class="las la-book"></i><span> Actas</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="<?php if ($select === "secretaria-actas-lista") {
                                                echo "active";
                                            } ?>" href="secretaria-actas-lista.php"><i class="las la-list-ol"></i><span style="margin-left: 10px;">Mostrar actas</span></a></li>
                            <li><a class="<?php if ($select === "secretaria-actas-registrar") {
                                                echo "active";
                                            } ?>" href="secretaria-actas-registrar.php"><i class="las la-file-invoice"></i><span style="margin-left: 10px;">Consumación</span></a></li>
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