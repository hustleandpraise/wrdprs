<?php
    $reverse = get_sub_field('image_position') === 'right' ? true : false; 
?>

<section>
    <div class="flex <?= $reverse ? 'flex-row-reverse' : ""; ?>">
        <div>
            <?= partial("_responsive_img",["id" => get_sub_field('image')['id'], "class" => ""]); ?>
        </div>
        <div>
            <div>
                <?= get_sub_field('text'); ?>
            </div>
        </div>
    </div>
</section>