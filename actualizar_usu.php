<?php
   include_once("sesiones.php");
   $entrada="";
   
    
   include_once("conectar_utd.php");
   $id=$_REQUEST['id'];
   $password=$_REQUEST['password'];
    $privilegio=$_REQUEST['privilegio'];

   $consulta="select * from usuarios where username='$id'and password='$password'and privilegio='$privilegio'";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       $nom=$_POST['nombre'];
       $passi=$_POST['pass'];
       $privi=$_POST['priv'];

       $consulta="update usuarios set username='$nom',password='$passi',privilegio='$privi' where username='$id' and password=hex(AES_ENCRYPT('$password','visualizarpass')) and privilegio='$privilegio'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
        //    echo "<script>
        //             alert('Registro Actualizado con Exito');
        //             location.href='usuarios1.php';
        //         </script>";
        $entrada="actualizar_usu";
       }
       else{
        //     echo "<script>
        //             alert('Fallo la actualización, intentelo de nuevo ...');
        //             location.href='editar_u.php';
        //           </script>";
            $entrada="erroractualizar_usu";
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
    <title>Actualizar Usuario</title>
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
    <div>
    <h1 class="titulo_log">Actualizar Usuario</h1>
    
    <form class="form_login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombre">Username:</label></td>
                <td><input type="text" name="nombre" required placeholder="Username" value="<?php echo $fila['username'] ?>"></td>
            </tr>
            <tr>
               <td><label for="pass">Contraseña:</label></td>
                <td><input type="text" name="pass" required placeholder="Contraseña" value="<?php echo $fila['password'] ?>"></td>
            </tr>
            <tr>
                <td>
                <select name="priv" id="priv">
                    <option value="<?php echo $fila['privilegio'] ?>"></option>
                    <option value="admin">Administrador</option>
                    <option value="estandar">Estandar</option>
                </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="enviar" Value="Guardar">
        <input type="hidden" name="id" Value="<?php echo $fila['username'] ?> "  >
        <input type="hidden" name="password" Value="<?php echo $fila['password'] ?> "  >
        <input type="hidden" name="privilegio" Value="<?php echo $fila['privilegio'] ?> "  >
        
    </form>
    <a href="usuarios1.php" class="enlace_menu">Regresar</a>
    </div>
</body>
</html>
<?php 
   include_once("alertas.php");
   ?>
