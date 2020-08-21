<?php
get_header();
?>
    <section class="slider">
        <div class="slider__container">
            <div class="mySlides fade">
                <img src="<?php echo  get_template_directory_uri()?>/img/slider_images/1.jpg">
            </div>
            
            <div class="mySlides fade">
                <img src="<?php echo  get_template_directory_uri()?>/img/slider_images/2.jpg">
            </div>
            
            <div class="mySlides fade">
                <img src="<?php echo  get_template_directory_uri()?>/img/slider_images/1.jpg">
            </div>
            <div class="mySlides fade">
                <img src="<?php echo  get_template_directory_uri()?>/img/slider_images/1.jpg">
            </div>
            <div class="dot_wrapper">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <div class="col-md-12 text1">Рекомендуем</div>
            <div class="row">
                <?php 
                    $args = array(
                        'featured' => true,
                        'posts_per_page' => 6,
                    );
                    $products = wc_get_products( $args );
                    if (!empty($products)){ ?>
                        <?php foreach ($products as $product) { ?>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="catalog__wrapper">
                                    <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="featured_img" class="catalog__img">
                                    <?php $product_taxonomy = get_the_terms($product->get_id(), 'product_brand'); ?>
                                    <div class="catalog__company"><?php echo $product_taxonomy[0]->name; ?></div> 
                                    <div class="catalog__type">скоро доработаю</div>
                                    <div class="catalog__name"><a href="<?php echo $product->get_permalink() ?>"><?php echo $product->get_name() ?></a></div>
                                    <?php 
                                        $product_cart_id = WC()->cart->generate_cart_id( $product->get_id() );
                                        $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
                                        if ( $in_cart ): ?>
                                                <button class="btn basket"> 
                                                    <?php if($product->is_on_sale()){ ?>
                                                        <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                        <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                        <?php }else{ ?>
                                                            <div class="btn__text"><span id="span_chosen"><?php echo wc_price($product->get_price()); ?></span></div>
                                                    <?php }  ?>
                                                    <img src="<?php echo  get_template_directory_uri()?>/img/catalog/in_basket.svg" alt="img">                      
                                                </button>
                                            <?php else: ?>
                                                <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                    <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn single_add_to_cart_button button alt"> 
                                                        <?php if($product->is_on_sale()){ ?>
                                                            <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                            <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                            <?php }else{ ?>
                                                                <div class="btn__text"><?php echo wc_price($product->get_price()); ?></div>
                                                        <?php }  ?>
                                                        <img src="<?php echo  get_template_directory_uri()?>/img/catalog/basket.svg" alt="img">                            
                                                    </button>
                                                </form>
                                        <?php endif; ?>
                                </div>
                            </div>
                    <?php 
                        }
                        wp_reset_postdata(); 
                    }
                    else{
                        echo "Пока рекомендуемых ппродуктов нет.";
                    }
                ?>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="catalog__wrapper">
                        <img src="<?php echo  get_template_directory_uri()?>/img/slider_images/2.jpg" alt="img" class="catalog__banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <div class="col-md-12 text2">Новинки</div>
            <div class="row">
                <?php 
                    $args = array(
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC' );
                    $products = wc_get_products( $args );
                    if (!empty($products)){ ?>
                        <?php foreach ($products as $product) { ?>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="catalog__wrapper">
                                    <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="featured_img" class="catalog__img">
                                    <?php $product_taxonomy = get_the_terms($product->get_id(), 'product_brand'); ?>
                                    <div class="catalog__company"><?php echo $product_taxonomy[0]->name; ?></div> 
                                    <div class="catalog__type">скоро доработаю</div>
                                    <div class="catalog__name"><a href="<?php echo $product->get_permalink() ?>"><?php echo $product->get_name() ?></a></div>
                                        <?php 
                                            $product_cart_id = WC()->cart->generate_cart_id( $product->get_id() );
                                            $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
                                            if ( $in_cart ): ?>
                                                <button class="btn basket">
                                                    <?php if($product->is_on_sale()){ ?>
                                                        <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                        <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                        <?php }else{ ?>
                                                            <div class="btn__text"><span id="span_chosen"><?php echo wc_price($product->get_price()); ?></span></div>
                                                    <?php }  ?>
                                                    <img src="<?php echo  get_template_directory_uri()?>/img/catalog/in_basket.svg" alt="img">                      
                                                </button>

                                            <?php else: ?>
                                                <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                    <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn single_add_to_cart_button button alt"> 
                                                        <?php if($product->is_on_sale()){ ?>
                                                            <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                            <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                            <?php }else{ ?>
                                                                <div class="btn__text"><?php echo wc_price($product->get_price()); ?></div>
                                                        <?php }  ?>
                                                        <img src="<?php echo  get_template_directory_uri()?>/img/catalog/basket.svg" alt="img">                            
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                </div>
                            </div>
                    <?php 
                        }
                        wp_reset_postdata(); 
                    }
                    else{
                        echo "Товары отсутствуют";
                    }
                ?>
            </div>
        </div>
    </section>
    
    <section class="catalog">
        <div class="container">
            <div class="col-md-12 text3">Скидки</div>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="catalog__wrapper">
                        <img src="<?php echo  get_template_directory_uri()?>/img/slider_images/2.jpg" alt="img" class="catalog__banner">
                    </div>
                </div>
                <?php 
                    $args = array(
                        'posts_per_page' => 7,
                        'include' => wc_get_product_ids_on_sale());
                    $products = wc_get_products( $args );
                    if (!empty($products)){ ?>
                        <?php foreach ($products as $product) { ?>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="catalog__wrapper">
                                    <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="featured_img" class="catalog__img">
                                    <?php $product_taxonomy = get_the_terms($product->get_id(), 'product_brand'); ?>
                                    <div class="catalog__company"><?php echo $product_taxonomy[0]->name; ?></div> 
                                    <div class="catalog__type">скоро доработаю</div>
                                    <div class="catalog__name"><a href="<?php echo $product->get_permalink() ?>"><?php echo $product->get_name() ?></a></div>
                                        <?php 
                                            $product_cart_id = WC()->cart->generate_cart_id( $product->get_id() );
                                            $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
                                            if ( $in_cart ): ?>
                                                <button class="btn basket">
                                                    <?php if($product->is_on_sale()){ ?>
                                                        <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                        <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                        <?php }else{ ?>
                                                            <div class="btn__text"><span id="span_chosen"><?php echo wc_price($product->get_price()); ?></span></div>
                                                    <?php }  ?>
                                                    <img src="<?php echo  get_template_directory_uri()?>/img/catalog/in_basket.svg" alt="img">                      
                                                </button>

                                            <?php else: ?>
                                                <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                                                    <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn single_add_to_cart_button button alt"> 
                                                        <?php if($product->is_on_sale()){ ?>
                                                            <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                            <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                            <?php }else{ ?>
                                                                <div class="btn__text"><?php echo wc_price($product->get_price()); ?></div>
                                                        <?php }  ?>
                                                        <img src="<?php echo  get_template_directory_uri()?>/img/catalog/basket.svg" alt="img">                            
                                                    </button>
                                                </form>
                                            <?php endif; ?>
                                </div>
                            </div>
                    <?php 
                        }
                        wp_reset_postdata(); 
                    }
                    else{
                        echo "Товары отсутствуют";
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">    
        <div class="text4">Почему мы?</div>
            <div class="row">
                <div class="col-md-4 offset-md-0 col-sm-6 offset-sm-2">
                    <div class="advantages__wrapper">
                        <img src="<?php echo  get_template_directory_uri()?>/img/advantages/dollar.svg" alt="dollar" class="advantages__img">
                        <div class="advantages__text">Доступные цены</div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-0 col-sm-6 offset-sm-2">
                    <div class="advantages__wrapper">
                        <img src="<?php echo  get_template_directory_uri()?>/img/advantages/delivery.svg" alt="delivery" class="advantages__img">
                        <div class="advantages__text">Бесплатная доставка</div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-0 col-sm-6 offset-sm-2">
                    <div class="advantages__wrapper">
                        <img src="<?php echo  get_template_directory_uri()?>/img/advantages/medal.svg" alt="medal" class="advantages__img">
                        <div class="advantages__text">Оригинальная продукция</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog__wrapper">
                <div class="blog__heading">Миссия</div>
                <div class="blog__text">Делится своим зарядом и позитивом и предоставлять качественный продукт для красоты и уверенности, тем самым делая наших клиентов счастливее!</div>
                
                <div class="blog__heading">Цель</div>
                <div class="blog__text">Привить культуру правильного и качественного ухода для поддержания красоты и молодости. Стать лидером среди аналогичных магазинов за счет высокого сервиса и отношения в формате <br> “Счастлив клиент -счастливы мы!” <br> Всегда следовать тенденциям моды и расширять ассортимент только качественным продуктом <br> Стать идеальным и доступным магазином для большинства девушек и женщин!</div>
            </div>
            <div class="follow">
                <div class="follow__text">Будь в курсе всех событий! Подпишись на нас в <span>Instagram</span>
                </div>
                <button class="follow__button"><a href="#" class="follow__link">ПОДПИСАТЬСЯ</a></button>
            </div>
        </div>
    </section>

    <div class="follow follow-small">
        <div class="follow-small__text">Будь в курсе всех событий! Подпишись на нас в <span>Instagram</span>
        </div>
        <button class="follow-small__button"><a href="#" class="follow-small__link">ПОДПИСАТЬСЯ</a></button>
    </div>
<script type="text/javascript" src="<?php echo  get_template_directory_uri()?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri()?>/js/slider.js"></script>
<?php
get_footer();
