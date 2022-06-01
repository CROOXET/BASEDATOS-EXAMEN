<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Informacion Personal</title>
</head>
<body>
<h3>Formulario del usuario</h3>
        <form action="registrousuario.php" method="POST">
            <div class="mb-3">
                <label class="from-lable">Ingresa el Nombre(real)</label>
                <input type="text" class="form-control" name="Nombre" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa el Apellido paterno</label>
                <input type="text" class="form-control" name="ApellidoPaterno" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa el Apellido materno</label>
                <input type="text" class="form-control" name="ApellidoMaterno" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa el numero de telefono</label>
                <input type="text" class="form-control" name="Telefono" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa el correo</label>
                <input type="text" class="form-control" name="Correo" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa el nombre de usuario</label>
                <input type="text" class="form-control" name="NombreUsuario" required/>
            </div>
            <div class="mb-3">
                <label class="from-lable">Ingresa la contraseña</label>
                <input type="text" class="form-control" name="Contrasena" required/>
            </div>
            <input type="submit" name="enviar" value="Ingresar datos" class="btn btn-primary"></bottom>
        </form>
        <!--INICIO TABLA DE PRODUCTOS-->
        <table class="table">
            <thead>
                <tr>
                    <th scoope="col">Codigo</th>
                    <th scoope="col">Nombre</th>
                    <th scoope="col">ApellidoPaterno</th>
                    <th scoope="col">ApellidoMaterno</th>
                    <th scoope="col">Telefono</th>
                    <th scoope="col">Correo</th>
                    <th scoope="col">NombreUsuario</th>
                    <th scoope="col">Contrasena</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('conec.php');
                $consulta ="SELECT  * FROM usuario";
                $resultado = mysqli_query($conexion,$consulta);
                while($fila = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <th scope="row"> <?php echo $fila["Codigo"]?></th>
                    <td><?php echo $fila["Nombre"]?></td>
                    <td><?php echo $fila["ApellidoPaterno"]?></td>
                    <td><?php echo $fila["ApellidoMaterno"]?></td>
                    <td><?php echo $fila["Telefono"]?></td>
                    <td><?php echo $fila["Correo"]?></td>
                    <td><?php echo $fila["NombreUsuario"]?></td>
                    <td><?php echo $fila["Contrasena"]?></td>                       
                </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>