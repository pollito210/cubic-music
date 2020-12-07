
<header class="site-header inicio">

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
                        if( isset( $_SESSION["user"] ) &&  isset( $_SESSION["type"] ) ){
                            echo'
                                <a href="carrito.php">Carrito</a>
                                <a href="salir.php">Salir</a>
                                <a href="#">'.$_SESSION["user"].'</a>
                            ';
                        } else {
                            echo'
                                <a href="iniciar-sesion.php">Iniciar Sesion</a>
                                <a href="#">Nel Prro</a>
                            ';
                        }
                    ?>
                </nav>

            </div>

            <h1>Tu música al alcance de todos</h1>

        </div>

    </header>