<?php $nav = wp_get_menu_array('main_navigation'); ?>

<?php if($nav): ?>
<ul>
    <?php foreach($nav as $link): ?>
    <li>
        <a href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
        <?php if(count($link['children'])): ?>
        <?php foreach($link['children'] as $sublink): ?>
    <li><a href="<?= $sublink['url']; ?>"><?= $sublink['title']; ?></a></li>
    <?php endforeach; ?>
    <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>