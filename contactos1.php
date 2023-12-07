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
	<title>Contactos</title>
	
</head>
<?php if($priv=="admin"){?>  
<body class= "fondo_root">
<?php }?>

<?php if($priv=="estandar"){?>  
<body class="fondo_user">
<?php }?>
<header>
<?php
	include_once('header.php');
  ?>
    <h1 class="titulo_log">Contactos</h1>

    <?php if($priv=="admin"){?>
    <div class="contenedor_enlace">
    <a href="contactos.php" class="enlace_menu">Nuevo</a>
    <a href="contactos1.php" class="enlace_menu">Administrar</a>
    </div>
    <?php }?>
	
	<div >
			<table class="table">
			  <thead class="table_head">
			    <tr>
			      <th scope='col'>Id</th>
			      <th scope='col'>Nombre</th>
			      <th scope='col'>Apellidos</th>
			      <th scope='col'>E-mail</th>
			      <th scope='col'>Dirección</th>
			      <th scope='col'>Telefono</th>
			   </tr>
			</thead>
			<?php
                include_once("conectar_utd.php");
                $consulta = "SELECT * FROM contactos";
                $resultado = mysqli_query($con, $consulta);
                if (mysqli_num_rows($resultado) > 0) {

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        //Mostrar los registros en la tabla
                ?>

<tr>
                            <td class="table_data"><?php echo $fila['id'];?></td>
                            <td class="table_data"><?php echo $fila['nombre']; ?></td>
                            <td class="table_data"><?php echo $fila['apellidos'];?></td>
                            <td class="table_data"><?php echo $fila['direccion'];?></td>
                            <td class="table_data"><?php echo $fila['telefono']; ?></td>
                            <td class="table_data"><?php echo $fila['email'];?></td>
	

                            <td class="table_data" colspan="2">
                                <a class="btn_acciones" href="imprimir_con.php? id=<?php echo $fila['id'];?>"><i class="fa-solid fa-print"></i></a>
								<a class="btn_acciones" href="visualizar_con.php? id=<?php echo $fila['id'];?>"><i class="fa-solid fa-eye"></i></a>
								<?php if($priv=="admin"){?>

								<a class="btn_acciones" href="actualizar_con.php? id=<?php echo $fila['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn_acciones" href="eliminar_con.php? id=<?php echo $fila['id'];?>"><i class="fa-solid fa-eraser"></i></a>
								<?php }?>

								</td>
                                
				   </tr>
		   <?php
			   }
		   }
		   ?>

			  

	   <tbody>
		
		   <th scope='row'></th >
			<td></td>
		  </tr>
	  
	   </tbody>
	   </table>
	   </div>
   <h2 class="titulo_log2">Existe <?php echo mysqli_num_rows($resultado); ?> Contactos</h2>
   </div>
</body>
</html>