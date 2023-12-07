<script  src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js" ></script>


<?php if ($entrada=="admin") { ?>
<script>
  function mensaje(){
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: '¡ B I E N V E N I D O !', 
      text: 'al sistema ... <?php  ?> ',
      showConfirmButton: false,
      timer:2000
     }).then(function(){
         location.href='menu.php';
     });
	}
  mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorsesion"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El usuario y/o la contraseña son incorrectos ',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="login.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="insertado"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="alumnos1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorinsertado"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="alumnos.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="insertado_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="contactos1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorinsertado_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="contactos.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="insertado_usu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorinsertado_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="actualizar_alu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido actualizado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="alumnos1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="erroractualizar_alu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="borrar_alu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido borrado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="alumnos1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorborrar_alu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido borrado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="actualizar_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido actualizado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="contactos1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="erroractualizar_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="contactos.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="borrar_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido borrado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="contactos1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorborrar_con"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido borrado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="contactos.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="borrar_usu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido borrado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorborrar_usu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido borrado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="actualizar_usu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'CORRECTO',
            text: 'El registro ha sido actualizado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="erroractualizar_usu"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El registo no ha sido insertado',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="usuarios1.php";
        });
    }
    mensaje();
</script>

</script>
<?php } elseif ($entrada=="errorsesion"){ ?>
    <script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ERROR',
            text: 'El usuario y/o la contraseña son incorrectos ',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            location.href="login.php";
        });
    }
    mensaje();
</script>


<?php } elseif ($entrada=="estandar") { ?>
<script>
  function mensaje(){
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: '¡ B I E N V E N I D O !', 
      text: 'al sistema ... <?php ?> ',
      showConfirmButton: false,
      timer:2000
     }).then(function(){
         location.href='menu.php';
     });
	}
  mensaje();
</script>
<?php } ?>


