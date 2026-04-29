<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuestros Proyectos</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include_once('header.php')?>
<section class="tittle-contact">
    <h2>NUESTROS PROYECTOS</h2>
</section>
<section class="projects-section">
  <div class="projects-grid">

    <div class="project-item">
      <div class="project-info">
        <span class="project-number">01</span>
        <h3 class="project-title">Proyecto 1</h3>
        <p class="project-desc">Web moderna enfocada en conversión y diseño atractivo.</p>
        <a href="Proyectos1.php" class="project-link">
          Ver proyecto
          <span class="arrow">
            <svg width="12" height="12" viewBox="0 0 12 12">
              <defs>
                <linearGradient id="gradArrow" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" stop-color="#22ADED"/>
                  <stop offset="100%" stop-color="#AF56DB"/>
                </linearGradient>
              </defs>

              <path 
                d="M2.5 6H9.5M6.5 3l3 3-3 3" 
                stroke="url(#gradArrow)" 
                stroke-width="1.5" 
                stroke-linecap="round"
              />
            </svg>
          </span>
        </a>
      </div>
      <div class="project-image">
        <img src="img/Proyecto1Hamburguseria.png">
      </div>
    </div>

    <div class="project-item">
      <div class="project-info">
        <span class="project-number">02</span>
        <h3 class="project-title">Proyecto 2</h3>
        <p class="project-desc">Diseño elegante con enfoque UX/UI y rendimiento.</p>
        <a href="Proyectos2.php" class="project-link">
          Ver proyecto
          <span class="arrow">
           <svg width="12" height="12" viewBox="0 0 12 12">
              <defs>
                <linearGradient id="gradArrow" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" stop-color="#22ADED"/>
                  <stop offset="100%" stop-color="#AF56DB"/>
                </linearGradient>
              </defs>

              <path 
                d="M2.5 6H9.5M6.5 3l3 3-3 3" 
                stroke="url(#gradArrow)" 
                stroke-width="1.5" 
                stroke-linecap="round"
              />
            </svg>
          </span>
        </a>
      </div>
      <div class="project-image">
        <img src="img/desarrollo-wen.png">
      </div>
    </div>

  </div>
</section>

<?php include_once('footer.php')?>

</body>
</html>