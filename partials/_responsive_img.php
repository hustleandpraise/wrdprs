<?php $sizes = get_responsive_img($args['id']); ?>

<img data-src="<?= $sizes['src']; ?>" data-srcset="<?= $sizes['srcset']; ?>" data-sizes="<?= $sizes['sizes']; ?>" lazyload class="lazyload <?= $args['class']; ?>" <?php if($args['alt']): ?>alt="<?= $a; ?>" <?php endif; ?> />

<noscript>
    <img src="<?= $sizes['src']; ?>" class="<?= $args['class']; ?>" <?php if($args['alt']): ?>alt="<?= $a; ?>" <?php endif; ?> />
</noscript>