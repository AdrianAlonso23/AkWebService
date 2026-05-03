<link rel="stylesheet" href="headerStyle.css">
<header>
  <nav>
    <div class="logo">
      <img src="img/Logo AK_Web_Service_Vector_header.svg" alt="Logo de AK Web Services">
    </div>
    <div class="menu-nav">
      <ul class="ul-menu">
        <li class="li-menu"><a href="index.php">Inicio</a></li>
        <li class="li-menu"><a href="Servicios.php">Servicios</a></li>
        <li class="li-menu"><a href="Proyectos.php">Proyectos</a></li>
        <li class="li-menu"><a href="Contacto.php">Contacto</a></li>
        <li class="li-menu"><a href="Blog.php">Blog</a></li>
      </ul>
    </div>
  </nav>
</header>

<script>
  const page = window.location.pathname.split('/').pop();
  document.querySelectorAll('.ul-menu a').forEach(link => {
    const linkPage = link.getAttribute('href');
    if (page === linkPage || (page.includes('Proyecto') && linkPage === 'Proyectos.php')) {
      link.classList.add('active');
    }
  });
</script>