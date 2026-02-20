<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php include_once ('header.php');?>
    </div>
    <link rel="stylesheet" href="styles.css">

<section class="tittle-contact">
    <h2>CONTÁCTANOS</h2>
</section>

<section class="contact-section">
    <div class="d-form">
        <p class="intro-text">
            Si deseas más información sobre nuestros productos y servicios puedes
            contactar con AK WebServices completando y enviando el siguiente formulario.
            Responderemos a la consulta con la máxima brevedad. Muchas gracias por tu confianza.
        </p>

        <form action="mailto:akwebservices1234@gmail.com">
            <div>
                <label for="Nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="Nombre">
            </div>
            <div>
                <label for="Email">Email</label>
                <input type="text" placeholder="Tu Email">
            </div>
            <div>
                <label for="Telefono">Telefono</label>
                <input type="text" placeholder="Tu Teléfono">
            </div>  
            <div>
                <label for="Asunto">Asunto</label>
                <input type="text" placeholder="Asunto">
            </div>
            <div>
                <label for="Mensaje">Mensaje</label>
                <textarea placeholder="Mensaje" rows="5"></textarea>
            </div>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>

    <div class="d-contacto">
        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px" viewBox="0 0 24 24" fill="none">
                <rect width="24" height="24" fill="none" />
                <path d="M2.01394 6.87134C1.34749 10.0618 3.85967 13.8597 7.01471 17.0147C10.1698 20.1698 13.9676 22.682 17.1581 22.0155C19.782 21.4674 21.1215 20.0697 21.8754 18.8788C22.1355 18.4678 22.0042 17.9344 21.6143 17.6436L17.9224 14.8897C17.5243 14.5928 16.9685 14.633 16.6174 14.9842L14.6577 16.9438C14.6577 16.9438 12.7529 16.3246 10.2288 13.8006C7.70482 11.2766 7.08564 9.37175 7.08564 9.37175L9.04529 7.4121C9.39648 7.06091 9.43671 6.5052 9.13975 6.10709L6.38585 2.4151C6.09505 2.02525 5.56163 1.89395 5.15068 2.15407C3.9597 2.90794 2.56203 4.24747 2.01394 6.87134Z"
                    stroke="#C67FFF" stroke-width="1.5" />
            </svg>
            <h6>Teléfono</h6>
            <p>+34 640 55 82 32</p>
        </div>

        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20 4C21.6569 4 23 5.34315 23 7V17C23 18.6569 21.6569 20 20 20H4C2.34315 20 1 18.6569 1 17V7C1 5.34315 2.34315 4 4 4H20ZM19.2529 6H4.74718L11.3804 11.2367C11.7437 11.5236 12.2563 11.5236 12.6197 11.2367L19.2529 6ZM3 7.1688V17C3 17.5523 3.44772 18 4 18H20C20.5523 18 21 17.5523 21 17V7.16882L13.8589 12.8065C12.769 13.667 11.231 13.667 10.1411 12.8065L3 7.1688Z"
                    fill="#C67FFF" />
            </svg>
            <h6>Email</h6>
            <p>akwebservices1234@gmail.com</p>
        </div>

        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px" viewBox="0 0 24 24" fill="none">
                <path d="M12 7V12L9.5 13.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                    stroke="#C67FFF" stroke-width="2" />
            </svg>
            <h6>Horario</h6>
            <p>Nuestro horario de atención<br>al cliente es de 8 a 20 horas</p>
        </div>
    </div>
</section>