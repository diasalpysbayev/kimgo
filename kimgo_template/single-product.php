<?php
global $product;
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
$product = wc_get_product( get_the_ID() );
$terms = get_the_terms( get_the_ID(), 'product_cat' );

?>
<?php get_header() ?>
    <section class="product">
        <div class="container">
            <div class="product__category"><a href="<?php echo get_home_url( ) ?>">Главная</a>/
            <?php foreach ($terms as $term): ?>
                <a href="<?php echo get_category_link($term->term_id); ?>"><?php echo $term->name; ?></a>/
            <?php endforeach; ?>
            <?php the_title(  )?></div>
            <div class="product__wrapper">
                <div class="product__img">
                    <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="product_img" class="product__image">
                </div>
                <div class="product__content">
                    <div class="product__name"><?php the_title(  );?></div>
                    <div class="product__price"><?php echo wc_price($product->get_price()); ?></div>
                    <div class="product__cart">
                        <form action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" class="prodform" method="post" enctype='multipart/form-data'>
                            <button class="prodform__button" type="button" id="minus">-</button>
                            <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
                            <?php
								do_action( 'woocommerce_before_add_to_cart_quantity' );

								woocommerce_quantity_input(
									array(
										'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
										'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
										'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
									)
								);
								do_action( 'woocommerce_after_add_to_cart_quantity' );
							?>
                            <button class="prodform__button" type="button" id="plus">+</button>
                            <button class="prodform__submit" type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>">В КОРЗИНУ</button>
                            <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                        </form>
                        <?php do_action( 'woocommerce_before_single_product' ); ?>
                    </div>
                    <div class="tabs">
                        <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
                        <label for="tab-btn-1">Описание</label>
                        <input type="radio" name="tab-btn" id="tab-btn-2" value="">
                        <label for="tab-btn-2">Характеристики</label>
                        <input type="radio" name="tab-btn" id="tab-btn-3" value="">
                        <label for="tab-btn-3">Описание</label>
                      
                        <div id="content-1">
                          <?php echo $product->get_description(); ?>
                        </div>
                        <div id="content-2">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Est accusantium exercitationem debitis, nisi esse quis aliquid ea nam, minus quibusdam impedit in animi adipisci rerum quo facilis! Quod, non eligendi.
                          Voluptatem nulla blanditiis sapiente, quos quis eveniet totam praesentium. Dolore consequatur dolorum id aspernatur quis numquam incidunt ea? Enim harum obcaecati beatae at consequatur quod rerum ipsum fugiat alias asperiores.
                          Ex labore ipsam illo nostrum repellendus aspernatur quis temporibus repellat dolorum aut eligendi ducimus accusamus facilis aperiam dicta eveniet praesentium vel eius, ipsum beatae exercitationem similique nemo? Obcaecati, inventore explicabo.
                        </div>
                        <div id="content-3">
                        	<?php echo $product->get_short_description(); ?>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text2">Вам также может понравиться</div>
    <div class="container">
        <div class="you-may-like">
            <div class="you-may-like__wrapper">
                    <?php 
                    $args = array(
                        'posts_per_page' => 6,
                    );
                    $products = wc_get_products( $args );
                    if (!empty($products)){ ?>
                        <?php foreach ($products as $product) { ?>
                        <div class="you-may-like__item">
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
                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn single_add_to_cart_button"> 
                                                    <?php if($product->is_on_sale()){ ?>
                                                        <div class="btn__text after"><?php echo wc_price($product->get_sale_price()); ?></div>
                                                        <div class="btn__text before"><span></span><?php echo $product->get_regular_price(); ?></div>
                                                        <?php }else{ ?>
                                                            <div class="btn__text"><?php echo wc_price($product->get_price()); ?></div>
                                                    <?php }  ?>
                                                    <img src="<?php echo  get_template_directory_uri()?>/img/catalog/basket.svg" alt="img" id="chose_img">                
                                                    <img src="<?php echo  get_template_directory_uri()?>/img/catalog/in_basket.svg" alt="img" id="chosen_img" style="display: none;">
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
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo  get_template_directory_uri()?>/slick/slick.min.js">
    </script>
    <script src="<?php echo get_template_directory_uri()?>/js/cart.js"></script>    
    </script>
    <script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>    
    </script>
    <script>
		if ( window.history.replaceState ) {
		  window.history.replaceState( null, null, window.location.href );
		}
	</script>
<?php get_footer() ?>