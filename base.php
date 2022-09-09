<?php
use Hustle\Setup;
use Hustle\Wrapper;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <?= partial("head"); ?>

    <body <?php body_class(); ?>>
        <main class="min-h-screen flex flex-col">
            <?= partial("_header"); ?>

            <?php /*
                Below renders any template page into that space.
                - index
                - page
                - single
                - search
                - template/homepage
                - etc
            */ ?>
            <div class="flex-1">
                <?php include Wrapper\template_path(); ?>
            </div>

            <?= partial("_footer"); ?>
        </main>

        <?php wp_footer(); ?>
        <script src="<?= js_url("main.min.js"); ?>"></script>
    </body>

</html>