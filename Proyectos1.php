<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto | Detalle</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
.project-detail {
  padding: 100px 20px;
  display: flex;
  justify-content: center;
  background: #000;
}

.project-detail-container {
  max-width: 900px;
  background: #0b0b0d;
  border: 1px solid #6f2bff;
  border-radius: 20px;
  padding: 60px;
  box-shadow: 0 0 30px rgba(162, 93, 255, 0.25);
  text-align: center;
}

/* título */
.project-detail-container h2 {
  font-size: 32px;
  margin-bottom: 20px;
  color: #fff;
  text-shadow: 0 0 10px #6f2bff;
}

/* texto */
.project-text {
  color: #aaa;
  font-size: 16px;
  line-height: 1.7;
  margin-bottom: 40px;
}

/* imagen */
.project-image-box {
  width: 100%;
  border-radius: 15px;
  overflow: hidden;
  border: 1px solid #6f2bff;
  box-shadow: 0 0 25px rgba(162, 93, 255, 0.3);
  margin-bottom: 40px;
}

.project-image-box img {
  width: 100%;
  display: block;
  transition: 0.4s;
}

.project-image-box img:hover {
  transform: scale(1.05);
}

/* info */
.project-info-box {
  text-align: left;
  margin-bottom: 40px;
}

.project-info-box h3 {
  color: #cda6ff;
  margin-bottom: 15px;
}

.project-info-box ul {
  list-style: none;
  padding: 0;
}

.project-info-box li {
  margin-bottom: 10px;
  color: #ddd;
}

/* botón reutilizando tu estilo */
.btn-gradient {
  background: linear-gradient(90deg, #22ADED, #AF56DB);
  padding: 12px 25px;
  border-radius: 12px;
  color: white;
  font-weight: bold;
  text-decoration: none;
  display: inline-block;
  transition: 0.3s;
}

.btn-gradient:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px #a56fff;
}

/* responsive */
@media (max-width: 768px) {
  .project-detail-container {
    padding: 30px;
  }

  .project-detail-container h2 {
    font-size: 24px;
  }
}
</style>

<body>

<?php include_once('header.php')?>

<section class="project-detail">
  <div class="project-detail-container">


    <h2>Desarrollo de una página web moderna</h2>

    <p class="project-text">
      Proyecto enfocado en la creación de una web moderna, optimizada para rendimiento,
      diseño responsive y experiencia de usuario. Se aplicaron tecnologías actuales y
      un diseño visual alineado con identidad de marca.
    </p>

    <div class="project-image-box">
      <img src="img/Proyecto1HambuergueseriaHome.png" alt="Imagen del proyecto">
    </div>

    <div class="project-info-box">
      <h3>Detalles del proyecto</h3>
      <ul>
        <li>✔ Diseño UI/UX moderno</li>
        <li>✔ HTML, CSS, JS</li>
        <li>✔ Optimización responsive</li>
        <li>✔ Enfoque en conversión</li>
      </ul>
    </div>

    <a href="Proyectos.php" class="btn-gradient">← Volver a proyectos</a>

  </div>
</section>

<?php include_once('footer.php')?>

</body>
</html>