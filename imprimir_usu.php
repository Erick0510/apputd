<?php
include_once("sesiones.php");

// $matricula = $_REQUEST['matricula'];

include_once("conectar_utd.php");
$matricula=$_REQUEST['matricula'];
   $password=$_REQUEST['password'];
    $privilegio=$_REQUEST['privilegio'];

   $consulta="select * from usuarios where username='$matricula'and password='$password'and privilegio='$privilegio'";
// $consulta = "select * from alumnos where matricula='$matricula'";
$resultado = mysqli_query($con, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    //regresa el registro de la consulta
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alumno </title>
    <link rel="stylesheet" href="">
</head>

<body onload='window.print()'>

    <div id="" class="">
        <div class="">
           <table class="">
            <tr>
                <td> Nombre: </td>
                <td style="text-align: center;"> <?php echo $fila['username']  ?> </td>
            </tr>

            <tr>
                <td> Contraseña: </td>
                <td style="text-align: center;"> <?php echo $fila['password']  ?> </td>
            </tr>

            <tr>
                <td> Privilegio: </td>
                <td style="text-align: center;"> <?php echo $fila['privilegio']  ?> </td>
            </tr>
           </table>
            <br>
            <br>
            
        </div>

    </div>
    <input type="hidden" name="matricula" Value="<?php echo $fila['username'] ?> ">
    <input type="hidden" name="password" Value="<?php echo $fila['password'] ?> "  >
        <input type="hidden" name="privilegio" Value="<?php echo $fila['privilegio'] ?> ">
</body>

</html>