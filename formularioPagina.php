<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Servicios</title>
     <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #000;
    color: #fff;
}
.tittle-formulario {
    height: 230px;
    background-image: url('img/fondo-formularios.png');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 2px solid #6f2bff;
    box-shadow: 0 0 25px rgba(162, 93, 255, 0.4);
}
h2 {
    font-size: 40px;
    text-shadow: 0 0 15px #a56fff;
}
.textos {
    margin-top: 10px;
    margin-bottom: 18px;
    color: #b98cff;
    font-size: 14px;
    line-height: 1.6;
    background: rgba(111, 43, 255, 0.08);
    padding: 12px 15px;
    border-left: 3px solid #6f2bff;
    border-radius: 8px;
}
.form-servicios {
    width: 550px;
}
.container {
    display: flex;
    max-width: 1030px;
    margin: 40px auto;
    gap: 25px;
}
.menu-padre {
    width: 200px;
    padding-right: 50px;
}
.menu-hijo {
    width: 200px;
    padding: 20px;
    background: #0b0b0d;
    border-radius: 15px;
    border: 1px solid #6f2bff;
    box-shadow: 0 0 20px rgba(162, 93, 255, 0.2);
    position: fixed;
}
.menu-hijo ul {
    list-style: none;
    padding: 0;
}
.menu-hijo li {
    margin-bottom: 12px;
}
.menu-hijo a {
    color: #cda6ff;
    text-decoration: none;
    font-weight: bold;
}
.menu-hijo a:hover {
    color: #fff;
    text-shadow: 0 0 10px #a56fff;
}
.content {
    flex: 1;
    background: #0b0b0d;
    padding: 25px;
    border-radius: 20px;
    border: 1px solid #6f2bff;
    box-shadow: 0 0 20px rgba(162, 93, 255, 0.25);
}
.service-block {
    margin-bottom: 35px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(150, 64, 255, 0.3);
}
.service-block h3 {
    color: #cda6ff;
    text-shadow: 0 0 7px #6f2bff;
}
.numbers button {
    margin: 4px;
    padding: 8px 14px;
    background: #000;
    color: #cda6ff;
    border: 1px solid #6f2bff;
    border-radius: 7px;
    cursor: pointer;
}
.numbers button.active {
    background: #a56fff;
    color: #000;
    box-shadow: 0 0 15px #a56fff;
}
.menu-padre-derecha {
    width: 200px;
    height: fit-content;
}
.summary {
    width: 200px;
    background: #0b0b0d;
    padding: 25px;
    border-radius: 15px;
    border: 1px solid #6f2bff;
    box-shadow: 0 0 20px rgba(162, 93, 255, 0.25);
    position: fixed;
    left: 50%;
    transform: translateX(325px);
}
.total {
    font-size: 24px;
    color: #cda6ff;
    text-shadow: 0 0 10px #a56fff;
}
.btn-enviar {
     background: linear-gradient(90deg, #22ADED, #AF56DB);
  border: none;
  padding: 12px 25px;
  border-radius: 12px;
  color: white;
  font-weight: bold;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
  width: 100%;
}
.btn-enviar:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px #a56fff;
}
.form-group select {
    width: 100%;
    padding: 12px 14px;
    background: #000;
    border: 1px solid #6f2bff;
    border-radius: 10px;
    color: #cda6ff;
    font-size: 15px;
    outline: none;
    transition: 0.25s;
}
input {
    padding: 10px;
    background: #0c0c0f;
    border: 2px solid #6f2bff;
    border-radius: 10px;
    color: #fff;
    font-size: 0.8rem;
    outline: none;
    transition: 0.3s;
    resize: none;
}
input:focus {
    box-shadow: 0 0 12px #a56fff;
    border-color: #a56fff;
}
.info-titulo {
    display: flex;
    align-items: center;
}

.info-icono {
    position: relative;
    cursor: pointer;
    width: 20px;
    margin-left: 8px;
    display: flex;
    align-items: center;
}

.tooltip-text {
    visibility: hidden;
    opacity: 0;
    width: 280px;
    background: #0b0b0d;
    color: #cda6ff;
    font-size: 13px;
    line-height: 1.6;
    padding: 12px 15px;
    border-radius: 10px;
    border: 1px solid #6f2bff;
    box-shadow: 0 0 18px rgba(111, 43, 255, 0.35);
    position: absolute;
    top: 30px;
    left: 0;
    z-index: 100;
    transition: opacity 0.25s ease, transform 0.25s ease;
    transform: translateY(-4px);
    pointer-events: none;
}

.info-icono:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
    transform: translateY(0);
}

.tooltip button {
    position: relative;
}

.tooltip button::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: calc(100% + 8px);
    left: 50%;
    transform: translateX(-50%) translateY(4px);
    background: #0b0b0d;
    color: #cda6ff;
    font-size: 12px;
    line-height: 1.5;
    padding: 9px 13px;
    border-radius: 10px;
    border: 1px solid #6f2bff;
    box-shadow: 0 0 18px rgba(111, 43, 255, 0.35);
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.25s ease, transform 0.25s ease;
    z-index: 10;
}

.tooltip button:hover::after {
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}
.breadcrumb {
    margin-left: 50px;
    padding-top: 30px;
}
.breadcrumb ol {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  padding: 0;
  margin: 0;
  font-size: 16px;
}
.breadcrumb li {
  display: flex;
  align-items: center;
}
.breadcrumb li:not(:last-child)::after {
  content: '/';
  margin-left: 4px;
  font-size: 16px;
  background: linear-gradient(90deg, #22ADED, #AF56DB);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.breadcrumb a {
  color: white;
  text-decoration: none;
  transition: color 0.2s;
}
.breadcrumb a:hover {
  color: #cda6ff;
  text-shadow: 0 0 8px #6f2bff;
}
.breadcrumb li[aria-current="page"] {
  color: white;
  font-weight: 500;
  border-bottom: 2px solid;
  border-image: linear-gradient(90deg, #22ADED, #AF56DB) 1;
  padding-bottom: 1px;
}
    </style>
</head>

<body>
    <div>
        <?php include_once ('header.php');?>
    </div>
    <nav class="breadcrumb" aria-label="Ruta de navegación">
      <ol>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="Servicios.php">Servicios</a></li>
        <li aria-current="page">Formulario de Pagina</li>
      </ol>
    </nav>
    <form id="formPagina">
        <div class="container">

            <!-- MENÚ IZQUIERDO -->
            <div class="menu-padre">
                <div class="menu-hijo">
                    <h3>Menú</h3>
                    <ul>
                        <li><a href="#DivApartados">1. Apartados</a></li>
                        <li><a href="#DivTextos">2. Textos</a></li>
                        <li><a href="#DivSeo">3. Posicionamiento</a></li>
                        <li><a href="#DivIdiomas">4. Idiomas</a></li>
                        <li><a href="#DivBlog">5. Blog</a></li>
                        <li><a href="#DivImagenes">6. Imágenes</a></li>
                        <li><a href="#DivBD">7. Bases de datos</a></li>
                    </ul>
                </div>
            </div>
            <div class="form-servicios">
                <div>
                    <h3>Formulario</h3>
                    <h5 class="textos">
                        Configura tu tienda online seleccionando las opciones que mejor se adapten a tu negocio. 
                        Elige productos, métodos de pago, envíos y funcionalidades extra de forma sencilla. 
                        El presupuesto se calculará automáticamente en tiempo real según tus elecciones. 
                        Al finalizar, podrás enviar tu solicitud para recibir una propuesta personalizada.
                    </h5>
                </div>
                <!-- CONTENIDO -->
                <div class="content">

                    <h3>Datos de contacto</h3>

                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    <input type="email" id="email" name="email" placeholder="Tu email" required>


                    <!-- APARTADOS -->
                    <div id="DivApartados" class="service-block">
                        <h3>1. Apartados (200€ / cada uno)</h3>
                        <div class="numbers" id="apartados"></div>
                    </div>

                    <!-- TEXTOS -->
                    <div id="DivTextos" class="service-block">
                        <div class="info-titulo">
                            <h3>2. Textos</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Incluye la redacción profesional de los contenidos de tu página web. 
                                    Nos encargamos de crear textos claros, atractivos y adaptados a tu negocio. 
                                    Ideal si no dispones de contenido propio.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button type="button" id="textosSi">Sí</button>
                            <button type="button" id="textosNo">No</button>
                        </div>
                    </div>

                    <!-- SEO -->
                    <div id="DivSeo" class="service-block">
                        <div class="info-titulo">
                            <h3>3. SEO</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Optimización básica para mejorar tu posicionamiento en buscadores. 
                                    Se trabajan palabras clave, estructura y rendimiento de la web. 
                                    Ayuda a que más usuarios encuentren tu negocio online.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button type="button" id="SEOsSi">Sí</button>
                            <button type="button" id="SEOsNo">No</button>
                        </div>
                    </div>

                    <!-- IDIOMAS -->
                    <div id="DivIdiomas" class="service-block">
                        <div class="info-titulo">
                            <h3>4. Idiomas</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Permite tener tu web disponible en varios idiomas. 
                                    Facilita llegar a clientes internacionales o ampliar tu mercado. 
                                    Cada idioma adicional requiere adaptación del contenido.
                                </span>
                            </span>
                        </div>
                        <div class="numbers" id="apartadosIdiomas"></div>
                    </div>

                    <!-- BLOG -->
                    <div id="DivBlog" class="service-block">
                        <div class="info-titulo">
                            <h3>5. Blog</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Añade una sección para publicar artículos o noticias. 
                                    Es útil para mejorar el SEO y mantener tu web actualizada. 
                                    También ayuda a generar contenido de valor para tus usuarios.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button type="button" id="BlogSi">Sí</button>
                            <button type="button" id="BlogNo">No</button>
                        </div>
                    </div>

                    <!-- IMÁGENES -->
                    <div id="DivImagenes" class="service-block">
                        <div class="info-titulo">
                            <h3>6. Imágenes</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Incluye selección y optimización de imágenes para tu web. 
                                    Mejora la estética y la experiencia visual del usuario. 
                                    Las imágenes se adaptan al diseño y rendimiento del sitio.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button type="button" id="ImagenesSi">Sí</button>
                            <button type="button" id="ImagenesNo">No</button>
                        </div>
                    </div>

                    <!-- BD -->
                    <div id="DivBD" class="service-block">
                        <div class="info-titulo">
                            <h3>7. Base de datos</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Permite integrar funcionalidades avanzadas en tu web. 
                                    Ideal para formularios, registros o gestión de información. 
                                    Aporta mayor dinamismo e interactividad al proyecto.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button type="button" id="BDSi">Sí</button>
                            <button type="button" id="BDNo">No</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- RESUMEN -->
            <div class="menu-padre-derecha">
                <div class="summary">

                    <h3>Resumen</h3>

                    <p>Total:</p>
                    <p class="total">
                        <span id="total">0</span>€
                    </p>

                    <button type="submit" class="btn-enviar">
                        ENVIAR SOLICITUD
                    </button>

                </div>
            </div>

        </div>

    </form>

    <script>
        const numContainer = document.getElementById('apartados');
        const totalSpan = document.getElementById('total');

        const btnTextosSi = document.getElementById('textosSi');
        const btnTextosNo = document.getElementById('textosNo');

        const btnSEOsSi = document.getElementById('SEOsSi');
        const btnSEONo = document.getElementById('SEOsNo');

        const numIdiomas = document.getElementById('apartadosIdiomas');


        const btnBlogSi = document.getElementById('BlogSi');
        const btnBlogNo = document.getElementById('BlogNo');

        const btnImagenesSi = document.getElementById('ImagenesSi');
        const btnImagenesNo = document.getElementById('ImagenesNo');

        const btnBDSi = document.getElementById('BDSi');
        const btnBDNo = document.getElementById('BDNo')

        let apartados = 0;
        let incluirTextos = false;
        let incluirSEO = false;
        let apartadosIdiomas = 0;
        let incluirBlog = false;
        let incluirImagenes = false;
        let incluiBD = false;
        let total = 0;

        // Crear botones 1-12
        for (let i = 1; i <= 12; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.addEventListener('click', () => {
                apartados = i;
                updateButtonsApartados();
                calcularTotal();
            });
            numContainer.appendChild(btn);
        }

        function updateButtonsApartados() {
            [...numContainer.children].forEach(btn => btn.classList.remove('active'));
            numContainer.children[apartados - 1].classList.add('active');
        }

        // Botón Sí
        btnTextosSi.addEventListener('click', () => {
            incluirTextos = true;
            btnTextosSi.classList.add("active");
            btnTextosNo.classList.remove("active");
            calcularTotal();
        });

        // Botón No
        btnTextosNo.addEventListener('click', () => {
            incluirTextos = false;
            btnTextosNo.classList.add("active");
            btnTextosSi.classList.remove("active");
            calcularTotal();
        });

        // SEO Sí
        btnSEOsSi.addEventListener('click', () => {
            incluirSEO = true;
            btnSEOsSi.classList.add("active");
            btnSEONo.classList.remove("active");
            calcularTotal();
        });

        // SEO No
        btnSEONo.addEventListener('click', () => {
            incluirSEO = false;
            btnSEONo.classList.add("active");
            btnSEOsSi.classList.remove("active");
            calcularTotal();
        });

        // crear idiomas
        for (let i = 1; i <= 3; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.addEventListener('click', () => {
                apartadosIdiomas = i;
                updateButtons();
                calcularTotal();
            });
            numIdiomas.appendChild(btn);
        }

        function updateButtons() {
            [...numIdiomas.children].forEach(btn => btn.classList.remove('active'));
            numIdiomas.children[apartadosIdiomas - 1].classList.add('active');
        }
        // Blog Sí
        btnBlogSi.addEventListener('click', () => {
            incluirBlog = true;
            btnBlogSi.classList.add("active");
            btnBlogNo.classList.remove("active");
            calcularTotal();
        });

        // Blog No
        btnBlogNo.addEventListener('click', () => {
            incluirBlog = false;
            btnBlogNo.classList.add("active");
            btnBlogSi.classList.remove("active");
            calcularTotal();
        });

        // Imagenes Sí
        btnImagenesSi.addEventListener('click', () => {
            incluirImagenes = true;
            btnImagenesSi.classList.add("active");
            btnImagenesNo.classList.remove("active");
            calcularTotal();
        });

        // imagenes No
        btnImagenesNo.addEventListener('click', () => {
            incluirImagenes = false;
            btnImagenesNo.classList.add("active");
            btnImagenesSi.classList.remove("active");
            calcularTotal();
        });

        // BD Sí
        btnBDSi.addEventListener('click', () => {
            incluiBD = true;
            btnBDSi.classList.add("active");
            btnBDNo.classList.remove("active");
            calcularTotal();
        });

        // BD No
        btnBDNo.addEventListener('click', () => {
            incluiBD = false;
            btnBDNo.classList.add("active");
            btnBDSi.classList.remove("active");
            calcularTotal();
        });

        //Total
        function calcularTotal() {
            total = apartados * 200
                + (incluirTextos ? 60 : 0)
                + (incluirSEO ? 699 : 0)
                + apartadosIdiomas * 200
                + (incluirBlog ? 199 : 0)
                + (incluirImagenes ? 300 : 0)
                + (incluiBD ? 200 : 0);


            totalSpan.textContent = total;
        }
        const form = document.getElementById("formEcommerce");

        form.addEventListener("submit", function (e) {
            e.preventDefault(); // evita recarga (opcional)

            form.reset(); // limpia inputs (nombre, email, select)

            // Resetear variables
            productos = 0;
            envio = false;
            pagosExtra = 0;
            extras = 0;

            // Quitar clases active
            document.querySelectorAll(".active").forEach(el => el.classList.remove("active"));

            // Resetear total
            totalSpan.textContent = "0";
        });
    </script>

    <script src="formulario.js"></script>
</body>

</html>