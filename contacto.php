<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo-pequeño.png">
</head>

<body>

    <header class="site-header inicio-internas">

        <div class="contenedor contenido-header">

            <div class="barra">

                <a href="/">
                    <img src="img/logo.png" alt="Logotipo de Cubic Music">
                </a>

                <nav class="navegacion">
                    <a href="nosotros.html">Conócenos</a>
                    <a href="servicios.html">Servicios</a>
                    <a href="producciones.html">Producciones</a>
                    <a href="contacto.html">Contacto</a>
                </nav>

            </div>

        </div>

    </header>

    <main class="contenedor seccion contenido-centrado">

        <h2 class="fw-300 f-white centrar-texto">Llena el Formulario de Contacto</h2>

        <form class="contacto" action="">

            <fieldset class="field">

                <legend>Información de Contacto</legend>

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Nombre del Representante">

                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Correo del Representante" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tel. del Representante" required>

            </fieldset>

            <fieldset class="field">

                <legend>Información Sobre El Plan</legend>

                <label for="opciones">Plan que desea contratar:</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="">Brilla por tu cuenta</option>
                    <option value="">En grupo es mejor</option>
                    <option value="">Instrumenta tus sueños</option>
                </select>

                <label for="cantidad">Integrantes:</label>
                <input type="number" min="1">

            </fieldset>

            <fieldset class="field">

                <legend>Especificaciones del servicio</legend>

                <p>¿Desea rentar instrumentos?:</p>

                <div class="forma-contacto">
                    <label for="si">Sí</label>
                    <input type="radio" name="contacto" value="si" id="si">

                    <label for="no">No</label>
                    <input type="radio" name="contacto" value="no" id="no">
                </div>

                <label for="cantidad">Número de canciones que desea producir:</label>
                <input type="number" min="1">

                <p>Fecha en la que desea usar las instalaciones de grabación:</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

            </fieldset>

            <input type="submit" value="Enviar" class="boton boton-azul">

        </form>

    </main>

    <footer class="">

        <div class="barra footer">

            <div>
                <a href="/">
                    <img src="img/logo.png" alt="Icono Cubic Music">
                </a>
            </div>

            <div class="info">

                <p>Redes:</p>

                <div class="redes">
                    <a href="#">
                        <img src="img/logotipo-facebook.png" alt="Logotipo de Facebook">
                    </a>
                    <a href="#">
                        <img src="img/logotipo-twitter.png" alt="Logotipo de Twitter">
                    </a>
                    <a href="#">
                        <img src="img/logotipo-instagram.jpg.png" alt="Logotipo de Instagram">
                    </a>
                </div>

                <p>Tel: 5511246879</p>
                <p>cubicmusic_contacto@gmail.com</p>
                <p>Calle de la Musica #40, Torreon, Coah. 27145</p>
            </div>

            <div>
                <p>Todos los derechos reservados &copy;</p>
            </div>

        </div>
    </footer>

</body>

</html>