<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento</title>
    <style>
         body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #000;
            color: #fff;
        }

        /* TÍTULO */
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
            color: #fff;
            font-size: 40px;
            text-shadow: 0 0 15px #a56fff;
        }

        /* LAYOUT GENERAL */
        .container {
            display: flex;
            max-width: 1030px;
            margin: 40px auto;
            gap: 25px;
        }

        /* MENÚ IZQUIERDO */
        .menu-padre {
            width: 200px;
            height: fit-content;
            padding-right: 50px;

        }
        
        .menu-hijo {
            width: 200px;
            
            padding: 20px;
            background: #0b0b0d;
            box-shadow: 0 0 20px rgba(162, 93, 255, 0.2);
            border-radius: 15px;
            border: 1px solid #6f2bff;
            position: fixed;
        }

        .menu-hijo ul {
            padding: 0;
            list-style: none;
        }

        .menu-hijo li {
            margin-bottom: 12px;
        }

        .menu-hijo a {
            text-decoration: none;
            color: #cda6ff;
            font-weight: bold;
            transition: 0.2s;
        }

        .menu-hijo a:hover {
            color: #fff;
            text-shadow: 0 0 10px #a56fff;
        }

        /* CONTENIDO PRINCIPAL */
        .content {
            flex: 1;
            background: #0b0b0d;
            padding: 25px;
            border-radius: 20px;
            border: 1px solid #6f2bff;
            box-shadow: 0 0 20px rgba(162, 93, 255, 0.25);
        }

        /* BLOQUES DE SERVICIO */
        .service-block {
            margin-bottom: 35px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(150, 64, 255, 0.3);
        }

        .service-block h3 {
            margin: 0 0 10px;
            color: #cda6ff;
            text-shadow: 0 0 7px #6f2bff;
        }

        .service-block p {
            opacity: 0.8;
        }

        /* BOTONES NUMÉRICOS */
        .numbers {
            margin: 4px;
            padding: 8px 14px;
            border: 1px solid #6f2bff;
            background: #000;
            color: #cda6ff;
            cursor: pointer;
            border-radius: 7px;
            transition: 0.25s;
        }

        .numbers:hover {
            background: #6f2bff;
            color: #000;
            box-shadow: 0 0 12px #a56fff;
        }

        .numbers.active {
            background: #a56fff;
            color: #000;
            box-shadow: 0 0 15px #a56fff;
        }

        /* RESUMEN DERECHA */
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
            font-weight: bold;
            margin: 20px 0;
            color: #cda6ff;
            text-shadow: 0 0 10px #a56fff;
        }

        /* BOTÓN ENVIAR */
        .btn-enviar {
            background: linear-gradient(90deg, #a56fff, #6f2bff);
            color: #000;
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 17px;
            font-weight: bold;
            transition: 0.25s;
        }

        .btn-enviar:hover {
            transform: scale(1.05);
            box-shadow: 0 0 18px #a56fff;
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
    </style>
</head>

<body>
    <div>
        <?php include_once ('header.php');?>
    </div>
    <form id="formMantenimiento">
        <div class="container">
            <!-- MENÚ IZQUIERDO -->
            <div class="menu-padre">
                <div class="menu-hijo">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="#manBasico">1. Basico</a></li>
                        <li><a href="#manAvanzado">2. Avanzado</a></li>
                        <li><a href="#manPremium">3. Premium</a></li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <h3>Datos de contacto</h3>

                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                <input type="email" id="email" name="email" placeholder="Tu email" required>
            <h3>Formulario</h3>
                <p class="textos">
                    Mantén tu página web siempre actualizada, segura y optimizada con nuestros planes de mantenimiento mensual. 
                    Nos encargamos de la parte técnica para que tú puedas centrarte en hacer crecer tu negocio. 
                    Elige el plan que mejor se adapte a tus necesidades y nivel de soporte requerido.
                </p>
                <div  class="service-block">
                    <h3>1. Mantenimiento Básico</h3>
                    <p class="textos">
                        Ideal para páginas web corporativas o proyectos pequeños que necesitan 
                        estabilidad y actualizaciones periódicas. Incluye actualizaciones del sistema, 
                        copias de seguridad mensuales y soporte técnico básico por incidencias.
                    </p>
                    <button id="mantBasico"  class="numbers">
                        Básico · 30€/mes
                    </button>
                </div>
                <div class="service-block">
                    <h3>2. Mantenimiento Avanzado</h3>
                    <p class="textos">Pensado para negocios que requieren mayor seguridad y mejoras continuas. 
                        Incluye monitorización, optimización de rendimiento, refuerzo de seguridad, 
                        copias de seguridad automáticas y pequeños cambios o ajustes mensuales.</p>
                    <button id="mantAvanzado" class="numbers">
                        Avanzado · 60€/mes
                    </button>
                </div>
                <!-- CONTENT --> 
                <div class="content">
                    
                    <h3>Datos de contacto</h3>

                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    <input type="email" id="email" name="email" placeholder="Tu email" required>

                    
                    <div  class="service-block">
                        <h3>1. Mantenimiento Básico</h3>
                        <button id="mantBasico"  class="numbers">
                            Básico · 30€/mes
                        </button>
                    </div>
                    <div class="service-block">
                        <div class="info-titulo">
                            <h3>2. Mantenimiento Avanzado</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Pensado para negocios que requieren mayor seguridad y mejoras continuas. 
                                    Incluye monitorización, optimización de rendimiento, refuerzo de seguridad, 
                                    copias de seguridad automáticas y pequeños cambios o ajustes mensuales.
                                </span>
                            </span>
                        </div>
                        <button id="mantAvanzado" class="numbers">
                            Avanzado · 60€/mes
                        </button>
                    </div>
                    <div class="service-block">
                        <div class="info-titulo">
                            <h3>3. Mantenimiento Premium</h3>
                            <span class="info-icono"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6f2bff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z" fill="#a56fff"></path> </g></svg>
                                <span class="tooltip-text">
                                    Servicio completo para empresas que necesitan máxima prioridad y evolución constante. 
                                    Incluye soporte prioritario, cambios ilimitados, optimización avanzada, 
                                    control de seguridad proactivo y asesoramiento técnico continuo.
                                </span>
                            </span>
                        </div>
                        <button id="mantPremium" class="numbers">
                            Premium · 100€/mes
                        </button>
                    </div>
                </div>
            </div>
        <!-- RESUMEN DERECHA -->
            <div class="menu-padre-derecha">
                <div class="summary">
                <h3>Precio</h3>
                <p class="total">Total: <span id="total">0</span>€</p>
                <button type="button" class="btn-enviar">
                    ENVIAR SOLICITUD
                </button>
            </div>
        </div>
    </form>

    <script> 
        const totalSpan = document.getElementById('total');

        const mantBasico = document.getElementById("mantBasico");
        const mantAvanzado = document.getElementById("mantAvanzado");
        const mantPremium = document.getElementById("mantPremium");

        let mantenimiento = 0;

        function seleccionarMantenimiento(btn, precio) {
            btn.onclick = () => {
                [mantBasico, mantAvanzado, mantPremium].forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                mantenimiento = precio;
                calcular();
            };
        }

        seleccionarMantenimiento(mantBasico, 30);
        seleccionarMantenimiento(mantAvanzado, 60);
        seleccionarMantenimiento(mantPremium, 100);

        function calcular() {
            let total = mantenimiento;
            totalSpan.textContent = total;
        }

    </script>
    <script src="formulario.js"></script>
</body>

</html>