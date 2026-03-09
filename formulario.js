document.querySelectorAll("form").forEach(form => {
    form.querySelector(".btn-enviar").addEventListener("click", () => {
        let formulario = form.id; // Saber cuál formulario es
        let nombre = form.querySelector("input[type=text]")?.value || '';
        let email = form.querySelector("input[type=email]")?.value || '';
        let detalle = '';
        let total = 0;

        if(formulario === "formMantenimiento") {
            detalle = document.querySelector(".numbers button.active")?.textContent || '';
            total = document.querySelector("#total").textContent;
        } else if(formulario === "formWeb") {
            detalle = `Apartados: ${apartados}, Textos: ${incluirTextos}, SEO: ${incluirSEO}, Idiomas: ${apartadosIdiomas}, Blog: ${incluirBlog}, Imágenes: ${incluirImagenes}, BD: ${incluiBD}`;
            total = document.querySelector("#total").textContent;
        } else if(formulario === "formEcommerce") {
            detalle = `Productos: ${productos}, Envío: ${envio}, Pagos Extra: ${pagosExtra}, Extras: ${extras}`;
            total = document.querySelector("#total").textContent;
        }

        fetch("https://tusitio.com/wp-json/ak/v1/solicitud", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                formulario,
                detalle,
                total,
                nombre,
                email
            })
        }).then(res => res.json())
          .then(data => alert("Solicitud enviada correctamente"))
          .catch(err => console.error(err));
    });
});