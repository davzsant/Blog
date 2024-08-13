<?php foreach($posts as $post): ?>
    <h1>
        <?php echo $post->title ?>
    </h1>
    <p>
    <?php echo $post->body ?>
    </p>
    <a href="/posts/<?php echo $post->id ?>">Ver mais sobre</a>
<?php endforeach ?>
