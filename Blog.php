<div>
    <?php include_once ('header.php'); ?>
</div>

<div id="posts">
<?php
$response = file_get_contents("https://akwebservice.bernat26.es/?rest_route=/wp/v2/posts");
$posts = json_decode($response);

foreach ($posts as $post) {
    echo "<article>";
    echo "<h2><a href='post.php?id={$post->id}'>{$post->title->rendered}</a></h2>";
    echo "<div class='post-content'>{$post->excerpt->rendered}</div>";
    echo "<a class='post-card-btn' href='post.php?id={$post->id}'>Leer más →</a>";
    echo "</article>";
}
?>
</div>

<div>
    <?php include_once ('footer.php'); ?>
</div>
