<div id="logotype"><a href="<?php echo esc_url(home_url()); ?>">Empiricus Research</a></div>
<nav>
                 <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'menu_class'        => 'nav navbar-nav',
                    ));
                ?>
            </nav>