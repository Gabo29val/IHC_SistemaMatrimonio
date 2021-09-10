<?php
$query = "SELECT * FROM empleado";
include("db_conection.php");
$res = mysqli_query($con, $query);
$num_resultados = mysqli_num_rows($res);
global $edit;

for ($i = 0; $i < $num_resultados; $i++) {
    $row = mysqli_fetch_array($res);
?>
    <tr>
        <td>
            <h2 class="table-avatar">
                <a href="#" class="avatar"><img alt="" src="assets/img/profiles/<?php if ($row['image'] == "") {
                                                                                    echo "avatar-00.png";
                                                                                } else {
                                                                                    echo $row['image'];
                                                                                } ?>"></a>
                <a href="#"><?php echo $row['nombre']; ?> <?php echo $row['apellidos']; ?><span><?php echo $row['cargo']; ?></span></a>
            </h2>
        </td>
        <td><?php echo $row['id_empleado']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
        <td><?php echo $row['fecha_ingreso']; ?></td>
        <td><?php echo $row['cargo']; ?></td>
        <td class="text-right">
            <div class="dropdown dropdown-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="admin-empleados-edit?editid=<?php echo $row['id_empleado']; ?>" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                    <a class="dropdown-item" href="#" onclick="eliminar('<?php echo $row['id_empleado']; ?>')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>

                    <a class="dropdown-item" href="#" onclick="eliminar('<?php echo $row['id_empleado']; ?>')"><i class="fa fa-trash-o m-r-5"></i> ELIMINAR</a>

                    <!-- $aniid = $_GET['editid']; -->
                </div>
                <script>
                    function editar() {
                        alert("<?php echo $row['id_empleado'] ?>");
                        <?php $GLOBALS['edit'] = $row; ?>
                    }

                    function eliminar(id) {
                        window.location.href = "admin-empleados-list.php?editid=" + id;
                    }
                </script>
            </div>
        </td>
    </tr>
<?php
}

?>