<?php while (have_posts()) : the_post(); ?>
<?= partial('page'); ?>
<?php endwhile; ?>