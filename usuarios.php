<?php

include_once("sesiones.php");
   $entrada="";
 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $priv=$_POST['priv'];
    


    include_once('conectar_utd.php');

    $insercion="INSERT INTO usuarios VALUES ('$usuario', hex(AES_ENCRYPT('$contraseña','visualizarpass')), '$priv')";

    $resultado=mysqli_query($con,$insercion);

    if ($resultado)
    {
        // echo "<script>
        //        alert('Se ha insertado con ÉXITO a $nombre'); location.href='insertar.php';
        //      </script>";
             $entrada="insertado_usu";
    }
    else
    {

    //    echo "<script>
    //            alert('Registro NO insertado, intentelo de nuevo, loser'); location.href='insertar.php';
    //          </script>";
             $entrada="errorinsertado_usu";
    }

 }

	
	
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
	<title>Usuarios</title>
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
    <h1 class="titulo_log">Usuarios</h1>
    
    <div class="contenedor_enlace">
    <a href="usuarios.php" class="enlace_menu">Nuevo</a>
    <a href="usuarios1.php" class="enlace_menu">Administrar</a>
    </div>
	
		    
	        
			<form method="post" action="" class="form_login">
	      
	          <table align="center">
	            <tr>
	              <td><label>Usuario:</label></td>
	              <td><input type="text"   name="usuario" required></td>
	            </tr>
	                <tr>
	                  <td><label>Contraseña:</label></td>
	                  <td><input type="password"  name="contraseña" required></td>
	                </tr>
	            <tr>
	              <td><label>Privilegio:</label></td>
	              <td>
	                <select name="priv"  required>
	                  <option value="admin">Admin</option> 
	                  <option value="estandar">Estandar</option> 
	                </select>
	              </td>
	            </tr>
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