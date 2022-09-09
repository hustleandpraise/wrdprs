<?php if (!have_posts()) : ?>
<div>
    <h2>No Posts Found</h2>
    <?php get_search_form(); ?>
</div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<?= partial('_post_card'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>