<?php
$host = "localhost";
$basededatos = "sistemamatrimonio";
$usuario = "root";
$clave = "";

//$con = new mysqli($host, $usuario, $clave, $basededatos);

$con = mysqli_connect(
    $host,
    $usuario,
    $clave,
    $basededatos
);

if($con->connect_errno){
    echo 'DB faild';
}else{
    //echo 'DB conected';
}