<?php
include_once("sesiones.php");

$matricula=$_REQUEST['matricula'];

include_once("conectar_utd.php");
$eliminar="DELETE FROM alumnos WHERE matricula='$matricula'";
$resultado=mysqli_query($con, $eliminar);
$entrada="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>eliminado</title>
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
<?php
if ($resultado){

   //  echo ("<script>
   //      alert('Registro eliminado con ÉXITO!'); location.href='alumnos1.php';
   //  </script>");
    $entrada="borrar_alu";
}

    else{
    //     echo ("<script>
    //     alert('Registro NO eliminado'); location.href='administrar.php';
    // </script>");
    $entrada="errorborrar_alu";
    }

 
?>
</body>
</html>
<?php 
   include_once("alertas.php");
   ?>


