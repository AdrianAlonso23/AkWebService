<link rel="stylesheet" href="style.css">

<div>
    <?php include_once('header.php'); ?>
</div>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php
if(!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<p>Entrada no encontrada.</p>";
    exit;
}

$id = intval($_GET['id']);

$response = file_get_contents("https://akwebservice.bernat26.es/?rest_route=/wp/v2/posts/$id");
$post = json_decode($response); 

if(!$post) {  
    echo "<p>No se pudo cargar la entrada.</p>";
    exit;
}
?>

<article class="post-single">

<header class="entry-header">
<h1 class="entry-title">
<?php echo $post->title->rendered; ?>
</h1>

<div class="entry-meta">
Publicado el <?php echo date("d/m/Y", strtotime($post->date)); ?>
</div>
</header>

<div class="post-content">
<?php echo $post->content->rendered; ?>
</div>

<a class="back-blog" href="blog.php">← Volver al blog</a>

</article>

</main>
</div>

<div>
    <?php include_once('footer.php'); ?>
</div>