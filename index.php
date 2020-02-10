<?php if (!have_posts()) : ?>
<div>
    <h2>No Posts Found :(</h2>
</div>
<?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<?= partial('post-list'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>