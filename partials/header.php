<header class="main">
    <div class="container">
        <div class="wrap">
            <div class="logo">
                <a href="<?= esc_url(home_url('/')); ?>">
                    Home
                </a>
            </div>
            
            <nav class="main">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu([
                        'theme_location'    => 'primary_navigation', 
                        'menu_class'        => 'nav',
                        'container'         => ''
                    ]);
                endif;
                ?>  
            </div>
        </div>
    </div>
</header>