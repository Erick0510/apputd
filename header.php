<header>
  <input type="checkbox" name="" id="btn-menu">
        <label for="btn-menu">
            <img src="icono_menu.jpeg" alt="menu" width="30px">
        </label>
        <nav class="nav_menu">
            <ul>
                <li><a  href="menu.php">Inicio</a></li>
                <?php if($priv=="admin"){?>  

                <li><a  href="alumnos.php">Alumnos</a></li>
                <li><a  href="contactos.php">Contactos</a></li>
				        <li><a  href="usuarios.php">Usuarios</a></li>
                <?php }?>

                <?php if($priv=="estandar"){?>  
                <li><a  href="alumnos1.php">Alumnos</a></li>
                <li><a  href="contactos1.php">Contactos</a></li>
				        <li><a  href="usuarios1.php">Usuarios</a></li>
                <?php }?>

                <li><a href="login.php"> <img src="img/cerrar2022.png" alt="" title="Cerrar Sesión"> Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>