<?php
include_once("sesiones.php");	
include_once('conectar_utd.php');
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
	<title>Inicio</title>
   
    
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
   <p class="p_menu">Sistema de Gestión de AppUTD</p>

        
	</div>
 
</body>
</html>