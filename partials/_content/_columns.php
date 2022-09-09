<section>
    <div>
        <h2><?= get_sub_field('heading'); ?></h2>

        <?php if(get_sub_field('columns')): ?>
        <?php foreach(get_sub_field('columns') as $column): ?>
        <article>
            <?php if($column['image']): ?>
            <?= partial("_responsive_img",["id" => $column['image']['id'], "class" => ""]); ?>
            <?php endif; ?>

            <h2><?= $column['heading']; ?></h2>

            <div class="prose">
                <?= $column['text']; ?>
            </div>

            <?php if($column['button']): ?>
            <a href="<?= $column['button']['url']; ?>"><?= $column['button']['title']; ?></a>
            <?php endif; ?>
        </article>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>