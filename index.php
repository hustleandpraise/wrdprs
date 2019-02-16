
<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <h2>No Posts Found :(</h2>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('partials/post-list'); ?> 
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
