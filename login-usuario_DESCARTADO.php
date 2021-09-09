<?php

if (isset($_POST['login'])) {
    $usser = trim($_POST['usser']);
    $password = trim($_POST['password']);
    //$passEncrip = md5($password);

    session_start();
    $_SESSION['usser'] = $usser;

    include("db_conection.php");

    //$query = "SELECT * FROM usuarios WHERE usser like '$usser' and password like '$passEncrip';";
    $query = "SELECT * FROM usuarios WHERE usuario='$usser' and password='$password'";

    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        
        if($usser==="admin"){
            header("location:admin-dashboard.php");
        }else if($usser==="secretaria"){
            header("location:secretaria-perfil.php");
        }else if($usser==="contador"){
            header("location:contador-perfil.php");
        }else if($usser==="calificador"){
            header("location:calificador-perfil.php");
        }
    } else {
?>
        <h4 class="bad">ERROR DE AUTENTIFICACION</h4>
        
    <?php
    }
}
    ?>