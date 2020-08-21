<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__align">
                    <div class="footer__contacts">
                        <img src="<?php echo  get_template_directory_uri()?>/icons/small_logo.png" alt="footer__logo" class="footer__logo">
                        <h3 class="footer__contact-header">Контакты</h3>
                        <div class="footer__text">+7 707 602 5959</div>
                        <h3 class="footer__address-header">Адрес</h3>
                        <div class="footer__text">г. Алматы, улица Макатаева 117</div>
                    </div>
                </div>
                <div class="footer__align">
                    <div class="footer__links">
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'footer_left',
                            'menu'            => 'footer_left',
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer__menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>
                        <!-- <ul class="footer__menu">
                            <li class="footer__item"><a href="#">Каталог</a></li>
                            <li class="footer__item"><a href="#">Популярное</a></li>
                            <li class="footer__item"><a href="#">Бренды</a></li>
                            <li class="footer__item"><a href="#">Акции</a></li>
                            <li class="footer__item hidden"><a href="#">Доставка и оплата</a></li>
                            <li class="footer__item hidden"><a href="#">Публичная оферта</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="footer__align">
                    <div class="footer__info">
                        <ul class="footer__menu">
                            <?php wp_nav_menu( array(
                            'theme_location'  => 'footer_right',
                            'menu'            => 'footer_right',
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer__menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>
                            <!-- <li class="footer__item shown"><a href="#">Доставка и оплата</a></li>
                            <li class="footer__item shown"><a href="#">Публичная оферта</a></li>  -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
