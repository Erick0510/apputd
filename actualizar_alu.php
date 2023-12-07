<?php
   include_once("sesiones.php");

   $matricula=$_REQUEST['matricula'];
   include_once("conectar_utd.php");
   $consulta="select * from alumnos where matricula='$matricula'";
   $resultado=mysqli_query($con,$consulta);
   $entrada = "";
   $actualizar="";


   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       $matricula=$_POST['matricula'];
       $nombre=$_POST['nombre'];
       $especialidad=$_POST['especialidad'];

       $consulta="update alumnos set nombre='$nombre',especialidad='$especialidad' where matricula='$matricula'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
          // echo "<script>
          //          alert('.:: Registro Actualizado con Exito ::.');
          //          location.href='alumnos1.php';
          //      </script>";
        $entrada="actualizar_alu";
        
       }
       else{
            // echo "<script>
            //         alert('Fallo la actualización, intentelo de nuevo ...');
            //         location.href='actualizar.php';
            //       </script>";
            $entrada="erroractualizar_alu";
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
    <h1 class="titulo_log">Actualizar Alumno</h1>
    <form class="form_login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Nombre:</label></td>
                <td><input type="text" name="nombre" matricula="nombrelbl" required placeholder="Nombre" autofocus value="<?php echo $fila['nombre'] ?>"></td>
            </tr>
            <tr>
               <td><label for="especialidadlbl">Especialidad:</label></td>
                <td><input type="text" name="especialidad" id="especialidadlbl" required placeholder="Especialidad" value="<?php echo $fila['especialidad'] ?>" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" Value="Guardar"   ></td>
                <td><input type="reset" name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="matricula" Value="<?php echo $fila['matricula'] ?> "  >
    </form>
    <a href="alumnos1.php" class="enlace_menu">Regresar</a>
</body>
</html>
<?php
include_once("alertas.php");
?>