<?php

include('datebase.php');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];

$consulta = "SELECT * FROM licencias WHERE Codigo = '$codigo' AND Nombre = '$nombre' ";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
        header("location:correcto.html");
}else{
    include("error.html");

}

?>