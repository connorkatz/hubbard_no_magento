<?php include 'includes/checkout_header.php' ?>
<?php include 'includes/checkout_breadcrumbs.php' ?>

<?php include 'includes/checkout_order_summary.php' ?>

<section id="checkout_layout_block_2">
    <h2>Shipping Address</h2>
    <div class="checkout_address_static">
        Jane Doe<br>
        <address>
            1234 Some St.<br>
            Somewhere, CA 93401<br>
            United States<br>
            805 555-1212
        </address>
        <a href="#">Edit</a>
    </div><!-- end shipping address review -->
    <form>
        <h2>Shipping Method</h2>
        <div id="checkout-step-shipping_method">
            <dl>
                <dt>
                    <input type="radio" id="s_method_1" checked name="shipping_method_type">
                    <label for="s_method_1">UPS Ground<span>FREE</span></label>
                </dt>
                <dt>
                    <input type="radio" id="s_method_2" name="shipping_method_type">
                    <label for="s_method_2">UPS 3 Day Select<span>$18</span></label>
                </dt>
                <dt>
                    <input type="radio" id="s_method_3" name="shipping_method_type">
                    <label for="s_method_3">UPS 2nd Day Air<span>$24</span></label>
                </dt>
                <dt>
                    <input type="radio" id="s_method_4" name="shipping_method_type">
                    <label for="s_method_4">UPS Next Day Air<span>$42</span></label>
                </dt>
                </ul>
            </dl>
        </div><!-- end shipping methods -->
    </form>
    <div class="buttons-set">
        <button type="button" onclick="window.location.href = '/checkout_step_3.php'"><i
                class="fa fa-refresh fa-spin"></i><span>Continue</span></button>
        <p class="back-link">
            <a href="checkout_step_1.php">Back</a>
        </p>
    </div><!-- end buttons set -->
</section><!-- end checkout step content -->


<?php include 'includes/checkout_footer.php' ?>
