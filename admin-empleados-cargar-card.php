<?php
$query = "SELECT * FROM empleado";
include("db_conection.php");
$res = mysqli_query($con, $query);
$num_resultados = mysqli_num_rows($res);

for ($i = 0; $i < $num_resultados; $i++) {
    $row = mysqli_fetch_array($res);
?>

    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
        <div class="profile-widget">
            <div class="profile-img">
                <a href="profile.html" class="avatar"><img src="assets/img/profiles/<?php if ($row['image']==""){echo "avatar-00.png"; } else {echo $row['image']; }?>" alt=""></a>
            </div>
            <div class="dropdown profile-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                </div>
            </div>
            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html"><?php echo $row['nombre']; ?> <?php echo $row['apellidos']; ?></a></h4>
            <div class="small text-muted"><?php echo $row['cargo']; ?></div>
        </div>
    </div>
<?php
}

?>