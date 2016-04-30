<?php include 'includes/header.php'; ?>


<div id="cart_content_container">

    <h1 class="page_header">Your Shopping Cart</h1>
    <hr class="decorative_break_2">

    <section id="cart_layout_block_1">

        <section id="cart_items_header_row">
            <ul>
                <li>Item</li>
                <li>Price</li>
                <li>Qty</li>
            </ul>
        </section><!-- end cart layout block 1 -->


        <section class="cart_item_block">
            <div class="ci_image_title_group">
                <div class="ci_image">
                    <a href="/catalog_product_detail.php">
                        <img src="../images/product_images/hubbard_free_tan_waxhide.jpg">
                    </a>
                </div><!-- end cart item image -->
                <div class="ci_title_group">
                    <h3><a href="/catalog_product_detail.php">Hubbard Free</a></h3>
                    <ul>
                        <li>
                            <span>Width&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>Medium
                        </li>
                        <li>
                            <span>Size&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>10.5
                        </li>
                    </ul>
                </div><!-- end ci title group -->
            </div><!-- end cart item image title_group -->
            <div class="ci_price">$210</div>
            <div class="ci_qty">
                <i id="ci_qty_plus" class="fa fa-minus"></i>
                <span>1 pair</span>
                <i id="ci_qty_minus" class="fa fa-plus"></i>
            </div><!-- end cart item quantity -->
            <div class="ci_remove">
                <i class="fa fa-remove"></i>
            </div><!-- end cart item remove -->
        </section><!-- end cart item block -->

        <section class="cart_item_block">
            <div class="ci_image_title_group">
                <div class="ci_image">
                    <a href="/catalog_product_detail.php">
                        <img src="../images/product_images/hubbard_free_tan_waxhide.jpg">
                    </a>
                </div><!-- end cart item image -->
                <div class="ci_title_group">
                    <h3><a href="/catalog_product_detail.php">Hubbard Free</a></h3>
                    <ul>
                        <li>
                            <span>Width&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>Medium
                        </li>
                        <li>
                            <span>Size&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>10.5
                        </li>
                    </ul>
                </div><!-- end ci title group -->
            </div><!-- end cart item image title_group -->
            <div class="ci_price">$210</div>
            <div class="ci_qty">
                <i id="ci_qty_plus" class="fa fa-minus"></i>
                <span>1 pair</span>
                <i id="ci_qty_minus" class="fa fa-plus"></i>
            </div><!-- end cart item quantity -->
            <div class="ci_remove">
                <i class="fa fa-remove"></i>
            </div><!-- end cart item remove -->
        </section><!-- end cart item block -->

        <section class="cart_item_block">
            <div class="ci_image_title_group">
                <div class="ci_image">
                    <a href="/catalog_product_detail.php">
                        <img src="../images/product_images/hubbard_free_tan_waxhide.jpg">
                    </a>
                </div><!-- end cart item image -->
                <div class="ci_title_group">
                    <h3><a href="/catalog_product_detail.php">Hubbard Free</a></h3>
                    <ul>
                        <li>
                            <span>Width&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>Medium
                        </li>
                        <li>
                            <span>Size&nbsp;&nbsp;&mdash;&nbsp;&nbsp;</span>10.5
                        </li>
                    </ul>
                </div><!-- end ci title group -->
            </div><!-- end cart item image title_group -->
            <div class="ci_price">$210</div>
            <div class="ci_qty">
                <i id="ci_qty_plus" class="fa fa-minus"></i>
                <span>1 pair</span>
                <i id="ci_qty_minus" class="fa fa-plus"></i>
            </div><!-- end cart item quantity -->
            <div class="ci_remove">
                <i class="fa fa-remove"></i>
            </div><!-- end cart item remove -->
        </section><!-- end cart item block -->

        <section id="cart_security_icons">
            <ul>
                <li><i class="fa fa-cc-paypal" title="PayPal"></i></li>
                <li><i class="fa fa-cc-visa" title="Visa"></i></li>
                <li><i class="fa fa-cc-mastercard" title="Mastercard"></i></li>
                <li><i class="fa fa-cc-amex" title="American Express"></i></li>
                <li><i class="fa fa-cc-discover" title="Discover"></i></li>
            </ul>
        </section><!-- end cart security icons -->

    </section><!-- end cart content container -->


    <section id="cart_layout_block_2">
        <div id="cart_summary">
            <ul id="cart_price_summary">
                <li>
                    <label>Subtotal</label>
                    <span>$630</span>
                </li>
                <li>
                    <label>Shipping</label>
                    <span>Free</span>
                </li>
                <li>
                    <label>Total</label>
                    <span>$630</span>
                </li>
            </ul><!-- end summary price row -->
            <div id="cart_checkout">
                <button onclick="window.location.href = '/checkout_step_1.php'">Checkout</button>
            </div><!-- end checkout row -->
            <div id="cart_continue_shopping">
                <a href="/">Continue Shopping</a>
            </div><!-- end continue shopping row -->
        </div><!-- end cart summary -->


    </section><!-- end cart cart layout block 2 -->
</div><!-- end cart sections container -->

<script src="js/cart.js"></script>

<?php include 'includes/footer.php'; ?>
