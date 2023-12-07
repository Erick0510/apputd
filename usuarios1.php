<?php
include_once('sesiones.php');
$entrada="";	

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <?php if($priv=="admin"){?>
    <div class="contenedor_enlace">
    <a href="usuarios.php" class="enlace_menu">Nuevo</a>
    <a href="usuarios1.php" class="enlace_menu">Administrar</a>
    </div>
    <?php }?>


		<div >
		  <table class="table">
			  <thead class="table_head">
			    <tr>
			      <th scope='col'>Username</th>
			      <th scope='col'>Password</th>
			      <th scope='col'>Privilegio</th>
			   </tr>
			</thead>

			<?php
                include_once("conectar_utd.php");
                $consulta = "SELECT * FROM usuarios";
                $resultado = mysqli_query($con, $consulta);
                if (mysqli_num_rows($resultado) > 0) {

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        //Mostrar los registros en la tabla
                ?>

<tr>
<tbody>
                            <td class="table_data"><?php echo $fila['username'];?></td>
                            <td class="table_data"><?php echo $fila['password']; ?></td>
                            <td class="table_data"><?php echo $fila['privilegio'];?></td>
                                    
                                    <td class="table_data" colspan="2" >
                                    <a class="btn_acciones" href="imprimir_usu.php?matricula=<?php echo $fila['username']?>&password=<?php echo $fila['password']?>&privilegio=<?php echo $fila['privilegio']?>" target="_blank"><i class="fa-solid fa-print"></i></a>
                                    <a class="btn_acciones" href="visualizar_usu.php?id=<?php echo $fila['username']?>&password=<?php echo $fila['password']?>&privilegio=<?php echo $fila['privilegio']?>"><i class="fa-solid fa-eye"></i></a>
                                <?php if($priv=="admin"){?>

                                    <a class="btn_acciones" href="actualizar_usu.php?id=<?php echo $fila['username']?>&password=<?php echo $fila['password']?>&privilegio=<?php echo $fila['privilegio']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn_acciones" href="eliminar_usu.php?username=<?php echo $fila['username']?>&password=<?php echo $fila['password']?>&privilegio=<?php echo $fila['privilegio']?>"><i class="fa-solid fa-eraser"></i></a>
                                <?php }?>

                                    </td>

                                    <?php } ?>
                   
				   </tr>
		   <?php
			   }
		   
		   ?>

		
		
		</tbody>
	    </table>
	   </div>
	   <h2 class="titulo_log2" >Existe <?php echo mysqli_num_rows($resultado); ?> Usuarios</h2>
</body>

</html>