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
                        <span>Usuarios del Sistema</span>
                    </li>

                    <li> 
						<a class="<?php if ($select === "admin-dashboard") {echo "active";} ?>" href="admin-dashboard.php"><i class="la la-user"></i> <span>Administrador</span></a>
					</li>
                    <li> 
						<a class="<?php if ($select === "secretaria-dashboard") {echo "active";} ?>" href="index-secretaria.php"><i class="la la-user"></i> <span>Secretaria</span></a>
					</li>
                    <li> 
						<a class="<?php if ($select === "contador-dashboard") {echo "active";} ?>" href="index.php"><i class="la la-user"></i> <span>Contador</span></a>
					</li>
                    <li> 
						<a class="<?php if ($select === "calificador-dashboard") {echo "active";} ?>" href="index.php"><i class="la la-user"></i> <span>Calificador</span></a>
					</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
<?php
}
?>