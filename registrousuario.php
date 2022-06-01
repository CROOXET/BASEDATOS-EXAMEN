<?php
include('conec.php');
if(isset($_POST['enviar'])){

    $Nombre =$_POST['Nombre'];
    $ApellidoPaterno =$_POST['ApellidoPaterno'];
    $ApellidoMaterno =$_POST['ApellidoMaterno'];
    $Telefono =$_POST['Telefono'];
    $Correo=$_POST['Correo'];
    $NombreUsuario=$_POST['NombreUsuario'];
    $Contrasena=$_POST['Contrasena'];
    $insertarinformacion = "INSERT INTO usuario (Nombre,ApellidoPaterno,ApellidoMaterno,Telefono,Correo,NombreUsuario,Contrasena) VALUE 
    ('$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Telefono','$Correo','$NombreUsuario','$Contrasena')";

$resultado = mysqli_query ($conexion,$insertarinformacion);


    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: usuario.php');
?>