<?php

include_once('db.php');

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

echo "los datos son los siguientes: <br>";
echo "$nombres, $apellidos, $direccion, $telefono, $usuario y $clave";
 

        $conectar=conn();
        $sql="INSERT INTO usuarios(nombres, apellidos, direccion, telefono, usuario, clave)
        VALUES ('$nombres','$apellidos','$direccion','$telefono','$usuario','$clave')";
        $resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

        echo "$sql";


?>