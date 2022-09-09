<?php
if (post_password_required()) {
  return;
}
?>

<section>
    <?php if (have_comments()) : ?>
    <h2><?= get_comments_number(); ?> Comments</h2>

    <ol>
        <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav>
        <ul>
            <?php if (get_previous_comments_link()) : ?>
            <li><?php previous_comments_link('&larr; Older comments'); ?></li>
            <?php endif; ?>

            <?php if (get_next_comments_link()) : ?>
            <li><?php next_comments_link('Newer comments &rarr;'); ?></li>
            <?php endif; ?>
        </ul>
    </nav>
    <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div>
        Comments are closed.
    </div>
    <?php endif; ?>

    <?php comment_form(); ?>
</section>