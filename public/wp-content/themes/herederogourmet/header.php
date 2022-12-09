<header class="header big">
    <div class="header__body">
        <?php
            $args = array(
                'theme_location' => 'menu-left',
                'container' => 'nav',
                'container_class' => 'navigation desktop'
            );
            wp_nav_menu($args);
        ?>
        <div class="containerLogo">
            <a href="/" id="logo" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logobig.png" alt="Logo Heedero Gourmet">
            </a>
            <h1 class="title">Heredero Gourmet</h1>
        </div>
        <?php
            $args = array(
                'theme_location' => 'menu-right',
                'container' => 'nav',
                'container_class' => 'navigation desktop'
            );
            wp_nav_menu($args);
        ?>
        <div class="containerHamburguer float">
            <div id="menu-toggle">
                <div id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="cross">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <?php
        $args = array(
            'theme_location' => 'menu-mobile',
            'container' => 'nav',
            'container_class' => 'navigation mobile'
        );
        wp_nav_menu($args);
    ?>
</header>