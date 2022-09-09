<div class="px-5 py-12 bg-peach">
    <div class="container">
        <h2><?= get_sub_field('heading'); ?></h2>

        <div class="grid max-w-6xl grid-cols-1 gap-8 pb-12 mx-auto mt-12 md:grid-cols-3">
            <?php if(get_sub_field('testimonials')): ?>
            <?php foreach(get_sub_field('testimonials') as $t): $post = $t['testimonial']; setup_postdata($post); ?>
            <?= partial("_testimonial"); ?>
            <?php endforeach; wp_reset_postdata();  ?>
            <?php endif; ?>
        </div>
    </div>
</div>