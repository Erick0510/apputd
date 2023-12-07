<?php
	
	
  include_once("sesiones.php");
   $entrada="";
 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];


    include_once('conectar_utd.php');

    $insercion="INSERT INTO contactos VALUES (null, '$nombre', '$apellidos', '$email', '$direccion', '$telefono')";

    $resultado=mysqli_query($con,$insercion);

    if ($resultado)
    {
        // echo "<script>
        //        alert('Se ha insertado con ÉXITO a $nombre'); location.href='insertar.php';
        //      </script>";
             $entrada="insertado_con";
    }
    else
    {

    //    echo "<script>
    //            alert('Registro NO insertado, intentelo de nuevo, loser'); location.href='insertar.php';
    //          </script>";
             $entrada="errorinsertado_con";
    }

 }

	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
	<title>Contactos</title>
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
	
<?php
	include_once('header.php');
  ?>
    <h1 class="titulo_log">Contactos</h1>
    <div class="contenedor_enlace">
    <a href="contactos.php" class="enlace_menu">Nuevo</a>
    <a href="contactos1.php" class="enlace_menu">Administrar</a>
    </div>
        
		  <form method="post" action="" class="form_login">
            <table align="center">
                <tr>
                    <td><label>Nombre:</label></td>
                    <td><input type="text"  name="nombre" required></td>
                </tr>
                <tr>
                    <td><label>Apellidos:</label></td>
                    <td><input type="text"   name="apellidos" required></td>
                </tr> 
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text"  name="email" required></td>
            </tr>
            <tr>
                <td><label>Direccion:</label></td>
                <td><input type="text"   name="direccion" required></td>
              </tr>
              <tr>
                <td><label>Telefono:</label></td>
                <td><input type="text"   name="telefono" required></td>
              </tr>
              <tr>
                <td><input type="submit"  value="Enviar"></td>
                <td><input type="reset"  value="Borrar"></td>
              </tr>
            </table>
          </form>
    
</body>
</html>

<?php
include_once("alertas.php");
?>

