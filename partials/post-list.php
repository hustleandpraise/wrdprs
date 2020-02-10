<article <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
        <p>By <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?= get_the_author(); ?></a></p>
    </header>
    <div>
        <?php the_content(); ?>
    </div>
    <a href="<?php the_permalink(); ?>">Read More</a>
</article>