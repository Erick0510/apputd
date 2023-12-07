<?php
include_once("sesiones.php");

$id = $_REQUEST['id'];

include_once("conectar_utd.php");
$consulta = "select * from contactos where id='$id'";
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
    <title> Contacto </title>
    <link rel="stylesheet" href="">
</head>

<body onload='window.print()'>

    <div id="" class="">
        <div class="">
           <table class="">
            <tr>
                <td> Id: </td>
                <td style="text-align: center;"> <?php echo $fila['id']  ?> </td>
            </tr>

            <tr>
                <td> Nombre: </td>
                <td style="text-align: center;"> <?php echo $fila['nombre']  ?> </td>
            </tr>

            <tr>
                <td> Apellidos: </td>
                <td style="text-align: center;"> <?php echo $fila['apellidos']  ?> </td>
            </tr>
            
            <tr>
                <td> E-mail: </td>
                <td style="text-align: center;"> <?php echo $fila['email']  ?> </td>
            </tr>

            <tr>
                <td> Direccion: </td>
                <td style="text-align: center;"> <?php echo $fila['direccion']  ?> </td>
            </tr>

            <tr>
                <td> Telefono: </td>
                <td style="text-align: center;"> <?php echo $fila['telefono']  ?> </td>
            </tr>
           </table>
            <br>
            <br>
            
        </div>

    </div>
    <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> ">
</body>

</html>