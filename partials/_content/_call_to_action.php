<section>
    <?= partial("_responsive_img",['id' => get_sub_field('image')['id']]); ?>
    <div>
        <h3><?= get_sub_field('heading'); ?></h3>
        <p><?= get_sub_field('text'); ?></p>
        <a href="<?= get_sub_field('button_link'); ?>"><?= get_sub_field('button_text'); ?></a>
    </div>
</section>