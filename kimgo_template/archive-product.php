<?php 
 get_header( );
?>
	<section class="product-category">
        <h2 class="product-category-name">Шампунь</h2>
    </section>

    <main class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter">
                    	<?php do_action( 'woocommerce_before_shop_loop' ); ?>
                        <!-- <div class="text4 mt50">Фильтр</div>
                        <div class="filter__wrapper">
                            <div class="filter__type">Тип волос</div>
                            <div class="filter__checkboxes">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Для всех типов <span>(4)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      Сухие <span>(1)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      Жирные <span>(2)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      Нормальные <span>(1)</span>
                                    </label>
                                  </div>
                            </div>
                        </div>

                        <hr>
                        <div class="filter__wrapper">
                            <div class="filter__type">Цена</div>
                            <div class="filter__checkboxes">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck1">
                                      1500-5000 <span>(4)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      2400-9999 <span>(1)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      4040 <span>(2)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      2020 <span>(1)</span>
                                    </label>
                                  </div>
                            </div>
                        </div>

                        <hr>
                        <div class="filter__wrapper">
                            <div class="filter__type">Бренд</div>
                            <div class="filter__checkboxes">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck1">
                                      1500-5000 <span>(4)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      2400-9999 <span>(1)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      4040 <span>(2)</span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="defaultCheck2">
                                      2020 <span>(1)</span>
                                    </label>
                                  </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="products">
                        <div class="text4 mt50">Рекомендуем</div>
                        <div class="products__breadcrumb">
                            <a href="#" class="products__breadcrumb__link">Главная</a>/
                            <a href="#" class="products__breadcrumb__link">Уход за волосами</a>/
                            <a href="#" class="products__breadcrumb__link"><span>Шампунь</span></a>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-4">
                                <div class="catalog__wrapper">
                                    <img src="img/catalog/shampoo.jpg" alt="img" class="catalog__img img_sm">
                                    <div class="catalog__company">SOMANG COSMETICS</div>
                                    <div class="catalog__type">КОНДИЦИОНЕР</div>
                                    <div class="catalog__name">SOMANG COSMETICS ECO ALOE HAIR CONDITIONER</div>
                                    <button class="btn">
                                        <div class="btn__text">4 200тг.</div>
                                        <img src="img/catalog/basket.svg" alt="img">
                                    </button>
                                    <img src="img/catalog/wrapper_new.svg" alt="img" class="catalog__cover">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="catalog__wrapper">
                                    <img src="img/catalog/shampoo.jpg" alt="img" class="catalog__img img_sm">
                                    <div class="catalog__company">SOMANG COSMETICS</div>
                                    <div class="catalog__type">КОНДИЦИОНЕР</div>
                                    <div class="catalog__name">SOMANG COSMETICS ECO ALOE HAIR CONDITIONER</div>
                                    <button class="btn">
                                        <div class="btn__text">4 200тг.</div>
                                        <img src="img/catalog/basket.svg" alt="img">
                                    </button>
                                    <img src="img/catalog/wrapper_new.svg" alt="img" class="catalog__cover">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="catalog__wrapper">
                                    <img src="img/catalog/shampoo.jpg" alt="img" class="catalog__img img_sm">
                                    <div class="catalog__company">SOMANG COSMETICS</div>
                                    <div class="catalog__type">КОНДИЦИОНЕР</div>
                                    <div class="catalog__name">SOMANG COSMETICS ECO ALOE HAIR CONDITIONER</div>
                                    <button class="btn">
                                        <div class="btn__text">4 200тг.</div>
                                        <img src="img/catalog/basket.svg" alt="img">
                                    </button>
                                    <img src="img/catalog/wrapper_new.svg" alt="img" class="catalog__cover">
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="products__sort">
                                    <div class="text4 mt50">Товары</div>
                                    <div class="products__filter-name"><a href="#">Сортировать</a></div>
                                    <select name="" id="" class="products__filter">
                                        <option selected>Сначала хиты</option>
                                        <option value="1">Сначала новинки</option>
                                        <option value="2">Сначала со скидкой</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="catalog__wrapper">
                                    <img src="img/catalog/shampoo.jpg" alt="img" class="catalog__img img_sm">
                                    <div class="catalog__company">SOMANG COSMETICS</div>
                                    <div class="catalog__type">КОНДИЦИОНЕР</div>
                                    <div class="catalog__name">SOMANG COSMETICS ECO ALOE HAIR CONDITIONER</div>
                                    <button class="btn">
                                        <div class="btn__text">4 200тг.</div>
                                        <img src="img/catalog/basket.svg" alt="img">
                                    </button>
                                    <img src="img/catalog/wrapper_new.svg" alt="img" class="catalog__cover">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="catalog__wrapper">
                                    <img src="img/catalog/shampoo.jpg" alt="img" class="catalog__img img_sm">
                                    <div class="catalog__company">SOMANG COSMETICS</div>
                                    <div class="catalog__type">КОНДИЦИОНЕР</div>
                                    <div class="catalog__name">SOMANG COSMETICS ECO ALOE HAIR CONDITIONER</div>
                                    <button class="btn">
                                        <div class="btn__text">4 200тг.</div>
                                        <img src="img/catalog/basket.svg" alt="img">
                                    </button>
                                    <img src="img/catalog/wrapper_new.svg" alt="img" class="catalog__cover">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="catalog__wrapper">
                                    <img src="img/catalog/shampoo.jpg" alt="img" class="catalog__img img_sm">
                                    <div class="catalog__company">SOMANG COSMETICS</div>
                                    <div class="catalog__type">КОНДИЦИОНЕР</div>
                                    <div class="catalog__name">SOMANG COSMETICS ECO ALOE HAIR CONDITIONER</div>
                                    <button class="btn">
                                        <div class="btn__text">4 200тг.</div>
                                        <img src="img/catalog/basket.svg" alt="img">
                                    </button>
                                    <img src="img/catalog/wrapper_new.svg" alt="img" class="catalog__cover">
                                </div>
                            </div> -->
                            <?php 
			                    $args = array(
			                        'posts_per_page' => 16);
			                    $products = wc_get_products( $args );
			                    if (!empty($products)){ ?>
			                        <?php foreach ($products as $product) { ?>
			                            <div class="col-md-4">
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
                        <!-- <nav aria-label="..."> -->
                        <div class="pagination">
                            <ul class="pagination__menu">
                              <li class="pagination__item">
                                <a class="pagination__link" href="#">&lt;</a>
                              </li>
                              
                              <li class="pagination__item"><a class="pagination__link" href="#">1</a></li>
                              <li class="pagination__item"><a class="pagination__link" href="#"><span>2</span></a></li>
                              <li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
                              <li class="pagination__item"><a class="pagination__link" href="#">4</a></li>
                              <li class="pagination__item"><a class="pagination__link" href="#">5</a></li>
                              <li class="pagination__item">
                                <a class="pagination__link" href="#">&gt;</a>
                              </li>
                            </ul>
                        <!-- </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php 
get_footer( 'shop' );
