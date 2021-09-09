<?php
if (isset($_POST['guardar-empleado'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_empleado = $_POST['id_empleado'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $telefono = $_POST['telefono'];
    $cargo = $_POST['cargo'];

    echo "datos capturados en la variable global POSTTTTT:<br><br>";
    echo $nombre . "<br>";
    echo $apellido . "<br>";
    echo $username . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $id_empleado . "<br>";
    echo $fecha_ingreso . "<br>";
    echo $telefono . "<br>";
    echo $cargo . "<br>";

    /*
    $query = "INSERT INTO empleado(dni, nombre, raza, genero, fechaNac, foto) VALUES ('$dni', '$nombre','$raza','$genero', '$fechaNac', '$nombreArchivo');";*/

    $query = "INSERT INTO empleado(`id_empleado`, `nombre`, `apellidos`, `username`, `email`, `password`, `fecha_ingreso`, `telefono`, `cargo`) VALUES ('$id_empleado','$nombre','$apellido','$username','$email','$password','$fecha_ingreso','$telefono', '$cargo')";

    echo $query;


    include("db_conection.php");
    $res = mysqli_query($con, $query);

    if (!$res) {
?>
        <h3>¡Ups ha ocurrido un error!</h3>
    <?php
        die("");
    }

    ?>
    <h3>¡Empleado registrado correctamente!</h3>
<?php

    header("location:admin-empleados.php");
}

?>