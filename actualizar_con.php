<?php
   include_once("sesiones.php");

   $id=$_REQUEST['id'];
   include_once("conectar_utd.php");
   $consulta="select * from contactos where id='$id'";
   $resultado=mysqli_query($con,$consulta);
   $entrada = "";


   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       $id=$_POST['id'];
       $nombre=$_POST['nombre'];
       $apellidos=$_POST['apellidos'];
       $email=$_POST['email'];
       $direccion=$_POST['direccion'];
       $telefono=$_POST['telefono'];


       $consulta="update contactos set nombre='$nombre',apellidos='$apellidos', direccion='$direccion',telefono='$telefono', email='$email' where id='$id'";

       $resultado=mysqli_query($con, $consulta);

       if ($resultado){
          // echo "<script>
          //          alert('.:: Registro Actualizado con Exito ::.');
          //          location.href='contactos1.php';
          //      </script>";
        $entrada="actualizar_con";
       }
       else{
            // echo "<script>
            //         alert('Fallo la actualización, intentelo de nuevo ...');
            //         location.href='actualizar.php';
            //       </script>";
            $entrada="erroractualizar_con";
       }


   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Actualizar Contacto</title>
    <link rel="stylesheet" href="">
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
    <h1 class="titulo_log"> Actualizar Contacto</h1>
    <form class="form_login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombrelbl" required placeholder="Nombre" autofocus value="<?php echo $fila['nombre'] ?>"></td>
            </tr>
            <tr>
               <td><label for="apellidoslbl">Apellidos:</label></td>
                <td><input type="text" name="apellidos" id="apellidoslbl" required placeholder="Apellidos" value="<?php echo $fila['apellidos'] ?>" ></td>
            </tr>
            <tr>
            <tr>
                <td><label for="emaillbl">E-mail:</label></td>
                <td><input type="text" name="email" id="emaillbl" required placeholder="Email" autofocus value="<?php echo $fila['email'] ?>"></td>
            </tr>
            <tr>
               <td><label for="direccionlbl">Direccion:</label></td>
                <td><input type="text" name="direccion" id="direccionlbl" required placeholder="Direccion" value="<?php echo $fila['direccion'] ?>" ></td>
            </tr>
            <tr>
               <td><label for="telefonolbl">Telefono:</label></td>
                <td><input type="text" name="telefono" id="telefonolbl" required placeholder="Telefono" value="<?php echo $fila['telefono'] ?>" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" Value="Guardar"   ></td>
                <td><input type="reset" name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
    </form>
    <a href="contactos1.php" class="enlace_menu">Regresar</a>
</body>
</html>
<?php
include_once("alertas.php");
?>