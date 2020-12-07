<header class="site-header inicio-internas">

<div class="contenedor contenido-header">

    <div class="barra">

        <a href="index.php">
            <img src="img/logo.png" alt="Logotipo de Cubic Music">
        </a>

        <nav class="navegacion">
            <a href="nosotros.php">Conócenos</a>
            <a href="servicios.php">Servicios</a>
            <a href="producciones.php">Producciones</a>
            <a href="contacto.php">Contacto</a>
            <a href="productos.php">Productos</a>
            <?php
                if(  isset( $_SESSION["user"] ) &&  isset( $_SESSION["type"] ) ){
                    echo'
                        <a href="carrito.php">Carrito</a>
                        <a href="salir.php">Salir</a>
                    ';
                } else {
                    echo'
                    <a href="iniciar-sesion.php">Iniciar Sesion</a>
                    ';
                }
            ?>
        </nav>

    </div>

</div>

</header>