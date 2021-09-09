<?php

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    echo $username;
    echo $password;

    $query = "SELECT * FROM empleado WHERE username like '$username' and password like '$password';";
    
    include("db_conection.php");

    $res = mysqli_query($con, $query);
    $num_resultados = mysqli_num_rows($res);


    if($num_resultados){
        $row = mysqli_fetch_array($res); 

        if($row['cargo']=="administrador"){
            header("location:admin-dashboard.php");
        }else if($row['cargo']=="contador"){
            header("location:contador-perfil.php");
        }else if($row['cargo']=="secretaria"){
            header("location:secretaria-perfil.php");
        }else if($row['cargo']=="calificador"){
            header("location:calificador-perfil.php");
        }
        
    }else{
        echo 'ERRORRRR';
    }
}
?>
