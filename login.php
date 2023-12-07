<?php

   session_start();

   if (isset($_SESSION))
   {
       session_destroy();
   }

   $entrada = "";
   
   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $user=$_POST['username'];
    $pass=$_POST['password'];

      include_once('conectar_utd.php');

     // $consulta="select username,password,privilegio from usuarios where username='$user' and password='$pass'";

      $consulta="select username,password,privilegio from usuarios where username='$user' and password=hex(AES_ENCRYPT('$pass','visualizarpass'))";


      $resultado=$con->query($consulta);

      if ($resultado->num_rows>0)
      {
          if ($row=$resultado->fetch_assoc())
          {
              $priv=$row['privilegio'];
             
              session_start();
              $_SESSION['username']=$user;
              $_SESSION['password']=$pass;
              $_SESSION['privilegio']=$priv;
            

              //Entre al menu de opciones 
             // echo "Usuario y contraseña correctas -Bienvenido al sistema-";
           if($priv=="admin"){
          //  echo "<script>
          //  alert('-Bienvenido-');
          //  location.href='menu.php';
         // </script>";
          $entrada = "admin";
           }elseif($priv=="estandar"){
           // echo "<script>
           //     alert('-Bienvenido-');
           //     location.href='menu.php';
           //     </script>";
                $entrada = "estandar";
       }

    }
      }
      else
      {
       // //  echo "Usuario y contraseña incorrectas por favor verifique ...";
       //  echo "<script>
       //          alert('Usuario y contraseña incorrectas por favor verifique ...');
       //          location.href='login.php';
       //        </script>";
               $entrada = "errorsesion";
      }

   }
   ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>LOGIN DE ACCESO</title>
    <link rel="stylesheet" href="estilos.css">
    

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
   
  </head>
  <body class="fondo_login"> 
    <h1 class="titulo_log" >ACCESO AL SISTEMA</h1>
    

    <div>
      
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form_login">
      <br>
        <table align="center">
              <tr>
                <td>
                <div class="card-body">
            <form  action="" method="post">                
                    <label for="usuariolbl">Usuario</label>
                  <input type="text" name="username" required id="usuariolbl" >
                </td>
              </tr
              <tr>
                <td>
      
                    <label for="passlbl">Contraseña</label>
                <input type="password" name="password" id="passlbl" required>
                </td>
              </tr>  
             <tr>
               <td colspan="2">
                   <input type="submit" name="enviar" value="Enviar" >
                   <input type="reset" name="borrar" value="Borrar" >
                </td>
             </tr>
          </table>
      </form>
    </div>
  </body>
</html>

<?php
include_once("alertas.php");
?>





