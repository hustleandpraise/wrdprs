<section>
    <div>
        <h2><?= get_sub_field('heading'); ?></h2>
    </div>
    <?php if(get_sub_field('gallery')): ?>
    <div>
        <?php foreach(get_sub_field('gallery') as $img): ?>
        <div>
            <a href="<?= $img['sizes']['large']; ?>">
                <?= partial("_responsive_img",["id" => $img['id'], "class" => "", "alt" => $img['alt']]); ?>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>