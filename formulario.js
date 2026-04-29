document.querySelectorAll("form").forEach(form => {

    const btn = form.querySelector(".btn-enviar");
    if (!btn) return;

    btn.addEventListener("click", () => {

        const formulario = form.id;

        const nombre = form.querySelector("input[type='text']")?.value || '';
        const email = form.querySelector("input[type='email']")?.value || '';

        let detalle = '';
        let total = form.querySelector("#total")?.textContent || 0;

        // ======================
        // MANTENIMIENTO
        // ======================
        if (formulario === "formMantenimiento") {
            const activo = form.querySelector(".numbers.active");
            detalle = activo ? activo.textContent : 'Sin selección';
        }

        // ======================
        // PÁGINA WEB
        // ======================
        else if (formulario === "formPagina") {
            detalle = `
                Apartados: ${typeof apartados !== "undefined" ? apartados : 0}
                Textos: ${typeof incluirTextos !== "undefined" ? incluirTextos : false}
                SEO: ${typeof incluirSEO !== "undefined" ? incluirSEO : false}
                Idiomas: ${typeof apartadosIdiomas !== "undefined" ? apartadosIdiomas : 0}
                Blog: ${typeof incluirBlog !== "undefined" ? incluirBlog : false}
                Imágenes: ${typeof incluirImagenes !== "undefined" ? incluirImagenes : false}
                BD: ${typeof incluiBD !== "undefined" ? incluiBD : false}
            `;
        }

        // ======================
        // ECOMMERCE (MEJORADO)
        // ======================
        else if (formulario === "formEcommerce") {

            const productos = form.querySelector("#productosNum .active")?.textContent || 0;

            const envio = form.querySelector("#envios .active")?.textContent || 'No';

            const pagos = [...form.querySelectorAll("#pagos .active")]
                .map(btn => btn.textContent)
                .join(", ") || 'Ninguno';

            const extras = [...form.querySelectorAll("#extras .active")]
                .map(btn => btn.textContent)
                .join(", ") || 'Ninguno';

            detalle = `
                Productos: ${productos}
                Envío: ${envio}
                Pagos extra: ${pagos}
                Extras: ${extras}
            `;
        }

        // ======================
        // VALIDACIÓN
        // ======================
        if (!nombre || !email) {
            alert("Rellena nombre y email");
            return;
        }
        console.log({
            formulario,
            detalle,
            total,
            nombre,
            email
        });
        // ======================
        // FETCH
        // ======================
        fetch("https://akwebservice.bernat26.es/wp-json/ak/v1/solicitud", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            mode: "cors",
            body: JSON.stringify({
                formulario,
                detalle,
                total,
                nombre,
                email
            })
        })
        .then(async res => {
            const data = await res.json();

            if (!res.ok || data.error) {
                throw new Error(data.error || "Error en servidor");
            }

            return data;
        })
        .then(data => {
            alert("Solicitud enviada correctamente");
            console.log("Respuesta:", data);
        })
        .catch(error => {
            console.error("Error REAL:", error);
            alert("Error al enviar");
        });

    });

});