<div>
    <?php include_once ('header.php');?>
</div>
<div id="posts"></div>
<script>
fetch("https://akwebservice.bernat26.es/?rest_route=/wp/v2/posts")
  .then(response => response.json())
  .then(posts => {
    const contenedor = document.getElementById("posts");

    posts.forEach(post => {
      const article = document.createElement("article");

      article.innerHTML = `
        <h2>${post.title.rendered}</h2>
        <small>Publicado el ${new Date(post.date).toLocaleDateString()}</small>
        <div>${post.content.rendered}</div>
        <hr>
      `;

      contenedor.appendChild(article);
    });
  })
  .catch(error => {
    console.error("Error cargando posts:", error);
  });
</script>
<div>
    <?php include_once ('footer.php');?>
</div> 