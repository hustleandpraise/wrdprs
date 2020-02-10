<header>
    <div>
        <div>
            <a href="<?= esc_url(home_url('/')); ?>">
                Home
            </a>
        </div>

        <nav>
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu([
                        'theme_location'    => 'primary_navigation', 
                        'menu_class'        => 'nav',
                        'container'         => ''
                    ]);
                endif;
            ?>
        </nav>
    </div>
</header>