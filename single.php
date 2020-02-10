<?php while (have_posts()) : the_post(); ?>
<?= partial('post'); ?>
<?php endwhile; ?>