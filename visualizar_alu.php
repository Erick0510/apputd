<?php

include_once('sesiones.php');
require_once 'dompdf/autoload.inc.php';

// Inicializar dompdf
use Dompdf\Dompdf;
$dompdf = new Dompdf();

// Preparar el contenido html
ob_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>Alumnos</title>
</head>
<body>
	<hr>
		<div align = "center">
			<table >
			  <thead>
			      <th scope='col'>Matricula</th>
			      <th scope='col'>Nombre</th>
			      <th scope='col'>Especialidad</th>
			  </thead>
			  <?php
                    include_once("conectar_utd.php");
                   $consulta="select * from alumnos";
                   $resultado=mysqli_query($con,$consulta);

                   if (mysqli_num_rows($resultado)>0){
                       while($fila=mysqli_fetch_assoc($resultado))
                       {
                        ?>
                           <tr>
                               <td class="table_data"><?php echo $fila['matricula'] ?></td>
                               <td class="table_data"><?php echo $fila['nombre'] ?></td>
                               <td class="table_data"><?php echo $fila['especialidad'] ?></td>                          
                           </tr> 
                        <?php
					   }
					}
				?>
			<tbody>
			  <tr>
	            <th scope='row'></th >
			     <td></td>
			   </tr>
	       
			</tbody>
			</table>
			<h3>Existen:  <?php echo mysqli_num_rows($resultado) ?> contáctos</h3>
		</div>
</body>
</html>

<?php

// Obteniendo el buffer del archivo
$html=ob_get_clean();
// NOTA: "echo $html;" para comprobar si se ve o no el html

// Configurando opciones de Dompdf
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadhtml($html);

// Tamaño de el reporte
$dompdf->setPaper('letter');

// Renderizando el archivo
$dompdf->render();
$dompdf->stream("reporte.pdf", array('Attachment' => false));

?>