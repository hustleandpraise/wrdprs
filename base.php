<?php
use Hustle\Setup;
use Hustle\Wrapper;
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<?= partial("head"); ?>
<body <?php body_class(); ?>>   

    <?= partial("header"); ?>
    
    <?php /*
        Below renders any template page into that space.
        - index
        - page
        - single
        - search
        - template/homepage
        - etc
    */ ?>

    <?php include Wrapper\template_path(); ?>

    <?= partial("footer"); ?>

    <?php wp_footer(); ?>
    <script src="<?= js_url("vendor.min.js"); ?>"></script>
    <script src="<?= js_url("main.min.js"); ?>"></script>
    
</body>
</html>