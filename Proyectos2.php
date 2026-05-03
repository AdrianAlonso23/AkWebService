<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto | NeonJack</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once('header.php')?>
  <nav class="breadcrumb" aria-label="Ruta de navegación">
      <ol>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="Proyectos.php">Proyectos</a></li>
        <li aria-current="page">NeonJack</li>
      </ol>
    </nav>
<section class="project-detail">
  <div class="project-detail-container">
    <h2>NeonJack — Casino Blackjack Online</h2>
    <p class="project-text">
      Plataforma de casino online centrada en el juego de Blackjack, desarrollada con Laravel.
      Incluye sistema de usuarios, ranking de jugadores, tienda de skins exclusivas y una 
      estética neon futurista alineada con la identidad de marca. Optimizada para rendimiento,
      seguridad y una experiencia de juego fluida en cualquier dispositivo.
    </p>
    <div class="project-image-box">
      <img src="img/Proyecto2NeonjackHome.png" alt="Captura de la home de NeonJack">
    </div>
    <div class="project-info-box">
      <h3>Detalles del proyecto</h3>
      <ul>
        <li>✔ Desarrollado con Laravel</li>
        <li>✔ Diseño UI/UX neon futurista</li>
        <li>✔ Sistema de ranking y usuarios</li>
        <li>✔ Tienda de skins desbloqueables</li>
        <li>✔ Optimización responsive</li>
        <li>✔ Pasarela de pagos segura</li>
      </ul>
    </div>
    <a href="Proyectos.php" class="btn-gradient">← Volver a proyectos</a>
  </div>
</section>
<?php include_once('footer.php')?>
</body>
</html>