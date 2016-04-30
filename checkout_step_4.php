<?php include 'includes/checkout_header.php' ?>
<?php include 'includes/checkout_breadcrumbs.php' ?>

<div id="checkout_content_container">

    <?php include 'includes/checkout_order_summary.php' ?>

    <section id="checkout_layout_block_2">
        <div id="place_order_top" class="place_order">
            <button type="button" onclick="window.location.href = '/checkout_thank_you.php'"><i
                    class="fa fa-refresh fa-spin"></i><span>Place Order</span></button>
        </div><!-- end place order top -->

        <h2>Order Review</h2>

        <section id="mobile_review_total">
            <label>Order Total</label>
            <span>$583.75</span>
        </section><!-- end mobile review total-->

        <section id="checkout_order_review">
            <section class="checkout_review_block">
                <h6>Customer Information</h6>
                <address>janedoe@whatever.com</address>
                <a href="#">Edit</a>
            </section><!-- end checkout review block -->

            <section class="checkout_review_block">
                <h6>Shipping Method</h6>
                <p>UPS Ground</p>
                <a href="#">Edit</a>
            </section><!-- end checkout review block -->

            <section class="checkout_review_block">
                <h6>Shipping Address</h6>
                <address>
                    Tom Smith<br>
                    1234 Some St.<br>
                    Somewhere, CA<br>
                    93401
                </address>
                <a href="#">Edit</a>
            </section><!-- end checkout review block -->

            <section class="checkout_review_block">
                <h6>Billing Address</h6>
                <address>
                    Tom Smith<br>
                    1234 Some St.<br>
                    Somewhere, CA<br>
                    93401
                </address>
                <a href="#">Edit</a>
            </section><!-- end checkout review block -->

            <section class="checkout_review_block">
                <h6>Payment Method</h6>
                <p>Credit Card&nbsp;&nbsp;&mdash;&nbsp;&nbsp;Visa</p>
                <a href="#">Edit</a>
            </section><!-- end checkout review block -->

        </section><!-- end order review -->


        <div id="place_order_bottom" class="place_order">
            <button type="button" onclick="window.location.href = '/checkout_thank_you.php'"><i
                    class="fa fa-refresh fa-spin"></i><span>Place Order</span></button>
        </div><!-- end buttons set -->

    </section><!-- end checkout step content -->

</div><!-- end checkout content container -->

<?php include 'includes/checkout_footer.php' ?>
