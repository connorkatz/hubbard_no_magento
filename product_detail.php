<?php include 'includes/header.php'; ?>
<?php include 'includes/scroll_arrow.php' ?>
    <nav id="breadcrumbs">
        <ul>
            <li>
                <a href="/"><i class="fa fa-home"></i></a>
            </li>
            <li>
                <a href="/category_landing.php">Men</a>
            </li>
            <li>
                <a href="/product_list.php">Un-Sneaker Collection</a>
            </li>
            <li>
                <a href="#">Hubbard Free</a>
            </li>
        </ul>
    </nav><!-- end breacrumbs -->

    <div id="prod_content_container">

        <section id="prod_detail_layout_block_1">

            <section id="prod_main_image_block">
                <div id="prod_main_image">
                    <div id="prod_main_image_inner">
                        <ul>
                            <li><img src="../images/prod_detail/product_detail_1.jpg"></li>
                            <li><img src="../images/prod_detail/product_detail_2.jpg"></li>
                            <li><img src="../images/prod_detail/product_detail_3.jpg"></li>
                            <li><img src="../images/prod_detail/product_detail_4.jpg"></li>
                            <li><img src="../images/prod_detail/product_detail_5.jpg"></li>
                        </ul>
                    </div><!-- end prod main image inner -->
                </div><!-- end prod main image -->
                <div id="prod_slider_left" class="prod_slider_nav"></div>
                <div id="prod_slider_right" class="prod_slider_nav"></div>
            </section><!-- end prod main image block -->
            <p>Tan Waxhide / White Outsole</p>
            <div id="prod_slider_pages"></div>


        </section><!-- end prod detail layout block 1 -->


        <section id="prod_detail_layout_block_2">

            <section id="prod_details">
                <div id="prod_details_inner">
                    <section id="prod_title_group">
                        <h1>Hubbard Free</h1>
                        <div id="prod_price_review_block">
                            <div id="prod_price">$210</div>
                            <div id="prod_review_summary">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- end prod review summary -->
                        </div><!-- end prod price review block -->
                    </section><!-- end prod title group -->
                    <div id="prod_details_lower">
                        <span id="color_option_name">Tan Waxhide</span>
                        <section id="prod_color_swatches">
                            <ul>
                                <li><img src="../images/swatches/swatch_1.png"></li>
                                <li><img src="../images/swatches/swatch_2.png"></li>
                                <li class="active"><img src="../images/swatches/swatch_3.png"></li>
                                <li><img src="../images/swatches/swatch_4.png"></li>
                                <li><img src="../images/swatches/swatch_5.png"></li>
                                <li><img src="../images/swatches/swatch_6.png"></li>
                                <li><img src="../images/swatches/swatch_7.png"></li>
                                <li><img src="../images/swatches/swatch_8.png"></li>
                                <li><img src="../images/swatches/swatch_9.png"></li>
                            </ul>
                        </section><!-- end prod option -->
                        <section class="prod_option_group">
                            <h5>Width</h5>
                            <div class="prod_option_select">
                                <span>Select Width</span>
                                <ul class="prod_option_items">
                                    <li>Medium</li>
                                    <li>Wide</li>
                                </ul>
                            </div><!-- end prod option select -->
                        </section><!-- end prod option -->
                        <section class="prod_option_group">
                            <h5>Size</h5>
                            <div class="prod_option_select">
                                <span>Select Size</span>
                                <ul class="prod_option_items">
                                    <li>7</li>
                                    <li>7.5</li>
                                    <li>8</li>
                                    <li>8.5</li>
                                    <li>9</li>
                                    <li>9.5</li>
                                    <li class="no_stock">10</li>
                                    <li>10.5</li>
                                    <li>11</li>
                                    <li>11.5</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                </ul>
                            </div><!-- end prod option select -->
                        </section><!-- end prod option -->
                        <div id="size_guide">
                            <a href="#">
                                <i class="fa fa-info-circle"></i>What size am I ?
                            </a>
                        </div><!-- end size guide -->
                        <div id="inventory_message"><i class="fa fa-exclamation-triangle"></i>Only 9 available in stock</div>
                        <div id="atc_row">
                            <button type="submit">Add to Cart</button>
                        </div><!-- end atc row -->
                        <div id="shipping_callout">
                            <i class="fa fa-thumbs-o-up"></i>Free Shipping &amp; Returns
                        </div><!-- end shipping callout -->
                    </div><!-- end prod details lower -->
                </div><!-- end prod details inner -->

            </section><!-- end prod details -->

        </section><!-- end prod detail layout block 2 -->

    </div><!-- end prod content container -->

    <script src="../js/product_detail.js"></script>
    <script>
        $j(document).ready(function() {

        });
        // end document ready
        // use reloadSlider in callback after updating new images, see bxslider.com/options andbxslider.com/examples/thumbnail-pager-2
        // prodImagesSlider.reloadSlider()
        prodImagesSlider = $j('#prod_main_image_inner ul').bxSlider({
            pagerSelector: '#prod_slider_pages',
            nextText: '&#xf054;',
            nextSelector: '#prod_slider_right',
            prevText: '&#xf053;',
            prevSelector: '#prod_slider_left',
            oneToOneTouch: false,
            buildPager: function(slideIndex){
                switch(slideIndex){
                    case 0:
                        return '<img src="../images/prod_detail/product_detail_1.jpg">';
                    case 1:
                        return '<img src="../images/prod_detail/product_detail_2.jpg">';
                    case 2:
                        return '<img src="../images/prod_detail/product_detail_3.jpg">';
                    case 3:
                        return '<img src="../images/prod_detail/product_detail_4.jpg">';
                    case 4:
                        return '<img src="../images/prod_detail/product_detail_5.jpg">';
                }
            }
        });

    </script>


<?php include 'includes/footer.php'; ?>