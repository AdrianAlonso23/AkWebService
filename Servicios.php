<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .servicio-icon{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
  <?php include_once('header.php'); ?>¡
  <section class="tittle-contact">
    <h2>SERVICIOS</h2>
  </section>

  <div class="servicios-container">

    <div class="servicio-card">
      <img class="servicio-icon" src="img/IconoPaginaWeb.svg" alt="">
      <h2 class="servicio-titulo">Titulooo</h2>
      <p class="servicio-texto">
        Contamos con un abanico de soluciones y servicios que permiten mejorar la seguridad de tu infraestructura,
        eliminar vulnerabilidades y ayudarte al cumplimiento del grado de seguridad que se quiera implantar.
      </p>
      <a class="servicio-btn" href="formularioPagina.html">Más información</a>
    </div>

    <div class="servicio-card">
     <img class="servicio-icon" src="img/IconoE-commerce.svg" alt="">
      <h2 class="servicio-titulo">Titulooo</h2>
      <p class="servicio-texto">
        Contamos con un abanico de soluciones y servicios que permiten mejorar la seguridad de tu infraestructura,
        eliminar vulnerabilidades y ayudarte al cumplimiento del grado de seguridad que se quiera implantar.
      </p>
      <a class="servicio-btn" href="formularioTienda.html">Más información</a>
    </div>

    <div class="servicio-card">
      <img src="img/IconoMantenimiento.svg" alt="" class="servicio-icon">
      <h2 class="servicio-titulo">Titulooo</h2>
      <p class="servicio-texto">
        Contamos con un abanico de soluciones y servicios que permiten mejorar la seguridad de tu infraestructura,
        eliminar vulnerabilidades y ayudarte al cumplimiento del grado de seguridad que se quiera implantar.
      </p>
      <a class="servicio-btn" href="formularioMantenimiento.html">Más información</a>
    </div>
  </div>
  <?php include('footer.php');?>
</body>
</html>