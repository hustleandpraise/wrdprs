<section>
    <?php if(get_sub_field('media_type') === 'video'): ?>
    <video src="<?= get_sub_field('video')['url']; ?>" inline autoplay loop muted></video>
    <?php else: ?>
    <?= partial("_responsive_img", ["id" => get_sub_field('image')['id']]); ?>
    <?php endif; ?>
    <div>
        <div><?= get_sub_field('label'); ?></div>
        <h2><?= get_sub_field('heading'); ?></h2>
    </div>
</section>