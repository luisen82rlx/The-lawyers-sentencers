<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos - The Lawyers Sentencers</title>
    <meta name="description" content="The lawyers sentencers - Especialistas en derecho civil, penal y laboral. Contacto y consulta inicial.">

    <!-- CSS -->
    <link rel="stylesheet" href="estilos de contactos.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js" defer></script>

    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand">
                <a href="index.html">
                    <img src="img/logoab.jpg" alt="Logo" style="height:70px;vertical-align:middle;margin-right:30px;">
                </a>
                <h1><i>The lawyers <span>sentencers</span></i></h1>
                <p class="tag">Defensa confiable — Resultados reales</p>
            </div>

            <nav class="nav">
                <a href="index.html">Inicio</a>
                <a href="servicios.html">Servicios</a>
                <a href="equipo.html">Equipo</a>
                <a href="nuestros socios.html">Nuestros Socios</a>
                <a class="btn" href="contactos.html">Contactos</a>
            </nav>

            <button class="nav-toggle" aria-label="Abrir menú">☰</button>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <section class="contact-section">
            <div class="container contact-grid">

                <!-- FORMULARIO -->
                <form class="contact-form" action="" method="POST">
                    <h2>Envíanos un mensaje</h2>

                    <label style="color:white;">Nombre
                        <input name="name" required>
                    </label>

                    <label style="color:white;">Email
                        <input name="email" type="email" required>
                    </label>

                    <label style="color:white;">Teléfono
                        <input name="telefono" type="text" required>
                    </label>

                    <label style="color:white;">Mensaje
                        <textarea name="message" rows="5" required></textarea>
                    </label>

                    <button class="btn" type="submit">Enviar</button>
                </form>

                <!-- INFORMACIÓN -->
                <div class="contact-info">
                    <h2>Información de contacto</h2>

                    <p><i class="fa-solid fa-location-dot" style="color:white;"></i> Calle Principal 123, Santo Domingo</p>
                    <p><i class="fa-solid fa-phone" style="color:white;"></i> +1 809 555 1234</p>
                    <p><i class="fa-solid fa-envelope" style="color:white;"></i> info@bufeterivera.com</p>
                    <p><i class="fa-solid fa-clock" style="color:white;"></i> Lun–Vie 9:00–18:00</p>

                    <!-- REDES SOCIALES -->
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook" style="color:white;"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter" style="color:white;"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram" style="color:white;"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin" style="color:white;"></i></a>
                        <a href="https://wa.me/18095551234" target="_blank"><i class="fa-brands fa-whatsapp" style="color:white;"></i></a>
                    </div>

                    <br>

                    <img src="img/mapa.png" alt="Mapa" style="height:250px;vertical-align:middle;">
                </div>

            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <p>© <span id="year"></span> The Lawyers Sentencers. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

</body>
</html>