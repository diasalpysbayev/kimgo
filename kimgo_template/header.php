<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/libs/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/libs/slick-theme.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="site-header">
        <nav class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 sm-hidden">
                        <?php the_custom_logo();?>
                    </div>
                    <div class="col-md-4 sm-hidden">
                        <form action="post" class="nav__form">
                            <input type="search" class="nav__search" placeholder="Что вы ищете?">
                            <button class="nav__submit" type="submit">
                                <img src="<?php echo get_template_directory_uri()?>/icons/search.svg" alt="search">
                            </button>
                        </form>
                    </div>
                    <div class="col-md-4 col-xl-3 sm-hidden">
                        <div class="nav__account-panel">
                            <div class="nav__identify">
                                <img src="<?php echo  get_template_directory_uri()?>/icons/default_avatar.svg" alt="nav__avatar" class="nav__img">
                                <div class="nav__wrapper-item">
                                <?php $current_user = wp_get_current_user(); ?>     
                                <?php if($current_user->exists()): ?>
                                    <a href="#" class="nav__signin"><?php echo $current_user->user_login ?></a>
                                    <a href="#" class="nav__register">Личный кабинет</a>
                                <?php else: ?>
                                    <a href="#" class="nav__signin">Войти</a>
                                    <a href="#" class="nav__register">Нет аккаунта?</a>
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="nav__shoplist">
                                <img src="<?php echo  get_template_directory_uri()?>/icons/itemlist.svg" alt="nav__shopimg" class="nav__img">
                                <div class="nav__wrapper-item">        
                                    <a href="#" class="nav__shopname">Моя корзина</a>
                                    <div class="nav__cost" id="shop_sum">
                                        <?php echo WC()->cart->get_cart_total(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xl-3 sm-hidden">
                        <div class="nav__contact">
                            <div class="nav__questions">
                                Есть вопросы?
                            </div>
                            <div class="nav__number">
                                +7 700 344 32 55 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </nav>
       
        <div class="subheader">
            <div class="container subheader_container">
                <?php $items = wp_get_nav_menu_items('Main'); ?>
                    <ul class="subheader__menu">
                        <li class="media_hidden">
                            <form action="post" class="nav__form">
                                <input type="search" class="nav__search" placeholder="Что вы ищете?">
                                <button class="nav__submit" type="submit">
                                    <img src="<?php echo  get_template_directory_uri()?>/icons/search.svg" alt="search">
                                </button>
                            </form>
                        </li>      
                        <?php $flag = False; ?>
                        <?php $counter = 0 ?>
                        <?php foreach ( $items as $item ): ?>
                            <?php if ($item->menu_item_parent == 0): ?>
                                <?php if($counter == 1): ?>
                                    </li>
                                <?php endif; ?>
                                <?php if($flag == True): ?>
                                    </ul>
                                    </li>
                                    <?php $counter = 1 ?>
                                    <?php $flag = False; ?>
                                    <li class="subheader__item dropdown"><a href="<?php echo $item->url; ?>" class="subheader__link"><?php echo $item->title; ?></a></li>
                                <?php else: ?>
                                    <li class="subheader__item dropdown"><a href="<?php echo $item->url; ?>" class="subheader__link"><?php echo $item->title; ?></a>
                                        <?php if($counter == 0): ?>
                                            <ul class="sub-menu">        
                                            <?php $flag = True; ?>
                                        <?php endif; ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="subheader__panel"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="media_hidden">
                            <div class="nav__identify">
                                <img src="<?php echo  get_template_directory_uri()?>/icons/default_avatar.svg" alt="nav__avatar" class="nav__img">
                                <div class="nav__wrapper-item">        
                                    <a href="#" class="nav__signin">Войти</a>
                                    <a href="#" class="nav__register">Нет аккаунта?</a>
                                </div>
                            </div>
                        </li>

                        <li class="media_hidden">
                            <div class="nav__shoplist">
                                <img src="<?php echo  get_template_directory_uri()?>/icons/itemlist.svg" alt="nav__shopimg" class="nav__img">
                                <div class="nav__wrapper-item">        
                                    <a href="#" class="nav__shopname">Моя корзина</a>
                                    <div class="nav__cost">10000 тг.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
