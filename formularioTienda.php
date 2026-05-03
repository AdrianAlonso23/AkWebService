<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario E-commerce</title>

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
        .textos{
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
        .form-servicios{
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
            width: 100%;
            padding: 14px;
            background: linear-gradient(90deg, #a56fff, #6f2bff);
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
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
        /** TOOLTIP **/

        .tooltip button {
            position: relative;
        }

        .tooltip button::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            background: #0b0b0d;
            color: #cda6ff;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #6f2bff;
            font-size: 13px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            box-shadow: 0 0 15px rgba(165, 111, 255, 0.4);
            transition: 0.25s ease;
            z-index: 10;
        }

        .tooltip button:hover::after,
        .numbers button:hover::before {
            opacity: 1;
        }
        input {
            padding: 10px;
            background: #0c0c0f;
            border: 2px solid #6f2bff;
            border-radius: 10px;
            color: #fff;
            font-size:0.8rem;
            outline: none;
            transition: 0.3s;
            resize: none;
            margin-bottom: 30px;
        }
        input:focus{
            box-shadow: 0 0 12px #a56fff;
            border-color: #a56fff;
        }
        .info-icono {
            position: relative;
            cursor: pointer;
            width: 20px;
            margin-left: 8px;
        }

        .tooltip-text {
            visibility: hidden;
            width: 300px;
            background-color: #333;
            color: #fff;
            text-align: left;
            padding: 10px;
            border-radius: 6px;

            position: absolute;
            top: 25px;
            left: 0;
            z-index: 1;

            opacity: 0;
            transition: opacity 0.3s;
        }

        .info-icono:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        .info-titulo {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div>
        <?php include_once ('header.php');?>
    </div>
    <form id="formEcommerce">
        <div class="container">
            <!-- MENU -->
            <div class="menu-padre">
                <div class="menu-hijo">
                    <H3>Menú</H3>
                    <ul>
                        <li><a href="#productos">1. Productos</a></li>
                        <li><a href="#pagos">2. Pagos</a></li>
                        <li><a href="#envios">3. Envíos</a></li>
                        <li><a href="#cupones">4. Cupones</a></li>
                        <li><a href="#clientes">5. Clientes</a></li>
                        <li><a href="#seo">6. SEO</a></li>
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
                <!-- CONTENT --> 
                <div class="content">
                    <h3>Datos de contacto</h3>

                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    <input type="email" id="email" name="email" placeholder="Tu email" required>


                    <div class="service-block">
                        <div class="info-titulo">
                            <h3>1. Información básica</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Este formulario te permite configurar los servicios necesarios para tu tienda online o proyecto digital. 
                                    Podrás seleccionar el sector de tu negocio, el número de productos, los métodos de pago, el sistema de envíos 
                                    y diferentes funcionalidades extra. El presupuesto se calculará automáticamente en función de las opciones 
                                    que elijas.
                                </span>
                            </span>
                        </div>
                        <div class="form-group">
                            <select>
                                <option selected disabled>Sector del negocio</option>
                                <option>Moda</option>
                                <option>Electrónica</option>
                                <option>Alimentación</option>
                                <option>Servicios</option>
                                <option>Digital</option>
                            </select>
                        </div>
                    </div>

                    <div id="productos" class="service-block">
                        <h3>2. Número de productos (5€ / producto)</h3>
                        <div class="numbers" id="productosNum"></div>
                    </div>

                    <div id="pagos" class="service-block">
                        <div class="info-titulo">
                            <h3>3. Métodos de pago</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Incluimos por defecto pago con tarjeta y PayPal. Si necesitas métodos adicionales como Bizum o Transferencia bancaria, podrás añadirlos como extras por 40€ cada uno.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button id="pagoBizum">Bizum</button>
                            <button id="pagoTransferencia">Transferencia</button>
                        </div>
                    </div>

                    <div id="envios" class="service-block">
                        <div class="info-titulo">
                            <h3>4. Sistema de envíos (100€)</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    El sistema de envíos incluye configuración completa con: precio fijo, envío gratuito, cálculo por zonas y opción de recogida en tienda. Todo adaptado a las necesidades de tu negocio.
                                </span>
                            </span>
                        </div>
                        <div class="numbers">
                            <button id="envioSi">Sí</button>
                            <button id="envioNo">No</button>
                        </div>
                    </div>
                    <div id="extras" class="service-block">
                        <div class="info-titulo">
                            <h3>5. Extras </h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Puedes añadir funcionalidades adicionales para mejorar el rendimiento 
                                    y la experiencia de tu tienda online. Cada extra tiene un coste de 50€ 
                                    y se integrará completamente en tu proyecto.                                
                                </span>
                            </span>
                        </div>               
                        <div class="numbers tooltip ">
                            <button id="ExtraSEO" data-tooltip="Optimización SEO básica para mejorar visibilidad en Google">
                                SEO
                            </button>
                            <button id="ExtraAreaClientes" data-tooltip="Área privada para clientes con historial de pedidos">
                                Área de clientes
                            </button>
                            <button id="ExtraCupones" data-tooltip="Sistema de cupones y descuentos configurables">
                                Cupones
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- RESUMEN DERECHA -->
            <div class="menu-padre-derecha">
                <div class="summary">
                <h3>Precio</h3>
                <p>Servicios seleccionados:</p>
                <p class="total">Total: <span id="total">0</span>€</p>
                <button type="submit" class="btn-enviar">
                    ENVIAR SOLICITUD
                </button>
            </div>
        </div>
    </form>


    <script>
        const productosDiv = document.getElementById("productosNum");
        const totalSpan = document.getElementById("total");

        const envioSi = document.getElementById("envioSi");
        const envioNo = document.getElementById("envioNo");

        const pagoBizum = document.getElementById("pagoBizum");
        const pagoTransferencia = document.getElementById("pagoTransferencia");

        const extraSEO = document.getElementById("ExtraSEO");
        const extraClientes = document.getElementById("ExtraAreaClientes");
        const extraCupones = document.getElementById("ExtraCupones");
        const extraEmails = document.getElementById("ExtraEmailsAutomaticos");

        let productos = 0;
        let envio = false;
        let pagosExtra = 0;
        let extras = 0;

        // PRODUCTOS
        for (let i = 10; i <= 200; i += 10) {
            const btn = document.createElement("button");
            btn.textContent = i;
            btn.onclick = () => {
                productos = i;
                [...productosDiv.children].forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                calcular();
            };
            productosDiv.appendChild(btn);
        }

        // ENVÍOS
        envioSi.onclick = () => {
            envio = true;
            envioSi.classList.add("active");
            envioNo.classList.remove("active");
            calcular();
        };

        envioNo.onclick = () => {
            envio = false;
            envioNo.classList.add("active");
            envioSi.classList.remove("active");
            calcular();
        };

        // PAGOS EXTRA (40€ cada uno)
        function togglePago(btn) {
            btn.onclick = () => {
                btn.classList.toggle("active");
                pagosExtra = document.querySelectorAll("#pagos .active").length * 40;
                calcular();
            };
        }

        togglePago(pagoBizum);
        togglePago(pagoTransferencia);

        // EXTRAS (50€ cada uno)
        function toggleExtra(btn) {
            btn.onclick = () => {
                btn.classList.toggle("active");
                extras = document.querySelectorAll("#extras .active").length * 50;
                calcular();
            };
        }

        toggleExtra(extraSEO);
        toggleExtra(extraClientes);
        toggleExtra(extraCupones);
        toggleExtra(extraEmails);

        function calcular() {
            let total =
                productos * 5 +
                (envio ? 100 : 0) +
                pagosExtra +
                extras;

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