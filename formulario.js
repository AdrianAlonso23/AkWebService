    document.querySelectorAll("form").forEach(form => {

        const btn = form.querySelector(".btn-enviar");

        if (!btn) return;

        btn.addEventListener("click", () => {

            const formulario = form.id;
            const nombre = form.querySelector("input[type='text']")?.value || '';
            const email = form.querySelector("input[type='email']")?.value || '';

            let detalle = '';
            let total = document.querySelector("#total")?.textContent || 0;

            if (formulario === "formMantenimiento") {
                const activo = form.querySelector(".numbers .active");
                detalle = activo ? activo.textContent : '';
            }

            else if (formulario === "formWeb") {
                detalle = `
                    Apartados: ${typeof apartados !== "undefined" ? apartados : 0},
                    Textos: ${typeof incluirTextos !== "undefined" ? incluirTextos : false},
                    SEO: ${typeof incluirSEO !== "undefined" ? incluirSEO : false},
                    Idiomas: ${typeof apartadosIdiomas !== "undefined" ? apartadosIdiomas : 0},
                    Blog: ${typeof incluirBlog !== "undefined" ? incluirBlog : false},
                    Imágenes: ${typeof incluirImagenes !== "undefined" ? incluirImagenes : false},
                    BD: ${typeof incluiBD !== "undefined" ? incluiBD : false}
                `;
            }

            else if (formulario === "formEcommerce") {
                detalle = `
                    Productos: ${typeof productos !== "undefined" ? productos : 0},
                    Envío: ${typeof envio !== "undefined" ? envio : false},
                    Pagos Extra: ${typeof pagosExtra !== "undefined" ? pagosExtra : 0},
                    Extras: ${typeof extras !== "undefined" ? extras : 0}
                `;
            }

            if (!nombre || !email) {
                alert("⚠️ Rellena nombre y email");
                return;
            }

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
                const text = await res.text();
                console.log("STATUS:", res.status);
                console.log("RESPUESTA:", text);
                
                if (!res.ok) {
                    throw new Error("Error en servidor");
                }

                return JSON.parse(text);
            })
            .then(data => {
                alert("✅ Solicitud enviada correctamente");
                console.log("Respuesta:", data);
            })
            .catch(error => {
                console.error("Error REAL:", error);
                alert("❌ Error al enviar");
            });
        });

    });