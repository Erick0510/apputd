<?php
	
  include_once("sesiones.php");
   $entrada="";
 if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $matricula=$_POST['matricula'];
    $nombre=$_POST['nombre'];
    $espec=$_POST['espec'];

    include_once('conectar_utd.php');

    $insercion="INSERT INTO alumnos VALUES ('$matricula', '$nombre', '$espec')";

    $resultado=mysqli_query($con,$insercion);

    if ($resultado)
    {
        // echo "<script>
        //        alert('Se ha insertado con ÉXITO a $nombre'); location.href='insertar.php';
        //      </script>";
             $entrada="insertado";
    }
    else
    {

    //    echo "<script>
    //            alert('Registro NO insertado, intentelo de nuevo, loser'); location.href='insertar.php';
    //          </script>";
             $entrada="errorinsertado";
    }

 }
?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Alumnos</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
	<!-- Aqui empieza Nuevo -->
  <?php
	include_once('header.php');
  ?>
    <h1 class="titulo_log">Alumnos</h1>

    <?php if($priv=="admin"){?>  
    <div class="contenedor_enlace">
    <a href="alumnos.php" class="enlace_menu">Nuevo</a>
    <a href="alumnos1.php" class="enlace_menu">Administrar</a>
    </div>
    <?php }?>

	
    
	<div >
	     <form method="post" action="" class="form_login">
            <table align="center">
              <tr>
                <td><label>Matricula:</label></td>
                <td><input type="text" class="form-control"  name="matricula" required></td>
              </tr>
            <tr>
                  <td><label>Nombre:</label></td>
                  <td><input type="text" class="form-control"  name="nombre" required></td>
                </tr>
              </div>
              <div class="form-group">
                <tr>
                  <td><label>Especialidad:  </label></td>
                  <td><input type="text" class="form-control"  name="espec" required></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Enviar"></td>
                    <td><input type="reset" class="btn btn-outline-primary" value="Borrar"></td>
                </tr>
            </table>
            <input type="hidden" name="tab" value="a">
          </form>
		</div>
    

</body>
</html>

<?php
include_once("alertas.php");
?>
