<article>
    <div><?= get_field('quote'); ?></div>
    <div><strong>- <?= get_field('cite'); ?></strong></div>
    <?php if(get_field('station')): ?>
    <div><?= get_field('station'); ?></div>
    <?php endif; ?>
    <?php if(get_field('image')): ?>
    <div><?= partial("_responsive_img", ["id" => get_field('image'), 'class' => '', 'alt' => get_field('cite')]); ?></div>
    <?php endif; ?>
</article>