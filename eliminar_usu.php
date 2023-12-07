<?php
   include_once("sesiones.php");
   $entrada="";
   

   include_once("conectar_utd.php");
   $username=$_REQUEST['username'];
   $password=$_REQUEST['password'];
   $privilegio=$_REQUEST['privilegio'];
   $consulta="delete from usuarios where username='$username' and password='$password' and privilegio='$privilegio'";
   $resultado=mysqli_query($con,$consulta);

   if ($resultado){
      //   echo "<script>
      //           alert('Registro eliminado con Éxito');
      //           location.href='usuarios1.php';
      //        </script>";
      $entrada="borrar_usu";
   }
   else{
      //   echo "<script>
      //           alert('Registro NO eliminado... VERIFIQUE');
      //           location.href='usuarios1.php';
      //         </script>";
      $entrada="errorborrar_usu";

   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos.css">
   <title>Document</title>
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
   
</body>
</html>

<?php 
   include_once("alertas.php");
   ?>