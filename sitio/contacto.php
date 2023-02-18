<?php
    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    //configuramos datos de email a enviar
    $destinatario = 'acá tu dirección'; /*!!!!!!*/
    $asunto = 'Email enviado desde Summer Exploring';
    $cuerpo = '<div style="width: 500px; padding: 32px; margin: auto;
                    background-color: #EC7D54; font-family: sans-serif;
                    color: #fff; font-weight: 600;">';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Consulta: '.$consulta;
    $cuerpo .= '</div>';

    $headers = 'From: satan@hell.com' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';

    //enviamos el email
    mail($destinatario, $asunto, $cuerpo, $headers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Summer Exploring</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <!-- logo + empresa -->
        <a href="index.html">
            <img src="imgs/sunsea.png" alt="Logo Summer Exploring">
            Summer Exploring
        </a>
        <!-- navegación -->
        <nav>
            <a href="index.html">Inicio</a>
            <a href="#">Promos</a>
            <a href="#">Servicios</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </header>
    <main>

        <section id="contacto" style="color: white">

            Gracias <?= $nombre ?> por contactarnos
            
        </section>


    </main>
    <footer>
        <!-- Logo + empresa -->
        <a href="index.html" id="logo-footer">
            <img src="imgs/sunsea-w.png" alt="Summer Exploring">
            Summer Exploring
        </a>
        <!-- redes sociales -->
        <div>
            <a href="">
                <img src="imgs/instagram-w.png" alt="Instagram">
            </a>
            <a href="">
                <img src="imgs/facebook-w.png" alt="Facebook">
            </a>
            <a href="">
                <img src="imgs/twitter-w.png" alt="Twitter">
            </a>
        </div>

    </footer>
</body>
</html>