<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="nav-bar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="contacto.php">Contáctanos</a></li>
        </ul>
    </nav>

    <header class="parallax parallax1">
        <div>
            <h1 class="nombre-tienda">Contáctanos</h1>
            </div>
    </header>

    <section class="content color1 contact-section">
            <p class="descripcion2 intro-text">¿Tienes alguna pregunta, sugerencia o simplemente quieres saludar? ¡Nos encantaría escucharte! Completa el siguiente formulario y nos pondremos en contacto contigo lo antes posible.</p>

            <div class="contact-form-container">
                
                <form action="procesar_contacto.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" placeholder="tu correo" required>
                    </div>

                    <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <input type="text" id="asunto" name="asunto" placeholder="Motivo de tu mensaje" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensaje">Tu Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="6" placeholder="Escribe tu mensaje aquí..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Enviar Mensaje</button>
                </form>

                <div class="contact-info-sidebar">
                    <h3>¿Dónde Encontrarnos?</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Calle del Café, Colonia Aroma, La Lima, Honduras</p>
                    <p><i class="fas fa-phone-alt"></i> +504 1234-5678</p>
                    <p><i class="fas fa-envelope"></i> info@elrincondelcafe.com</p>
                    
                    <h4>Horario de Atención:</h4>
                    <p><i class="fas fa-clock"></i> Lunes a Viernes: 8:00 AM - 6:00 PM</p>
                    <p><i class="fas fa-clock"></i> Sábados: 9:00 AM - 2:00 PM</p>
                    <p><i class="fas fa-clock"></i> Domingos: Cerrado</p>

                    <h4>Síguenos en Redes:</h4>
                    <div class="social-icons">
                        <a href="https://facebook.com/elrincondelcafe" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/elrincondelcafe" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/elrincondelcafe" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>