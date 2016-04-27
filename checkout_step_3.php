<?php include 'includes/checkout_header.php' ?>
<?php include 'includes/checkout_breadcrumbs.php' ?>

<?php include 'includes/checkout_order_summary.php' ?>

<section id="checkout_layout_block_2">

    <div id="mobile_coupon_code">
        <form>
            <h2>Coupon Code</h2>
            <input type="text" class="coupon_code_input" placeholder="Coupon Code">
            <button type="submit"><i class="fa fa-refresh fa-spin"></i><span>Apply</span></button>
        </form>
        <div id="mobile_coupon_code_details">
            <ul>
                <li>
                    <label>Discount <i class="fa fa-times-circle"></i></label>
                    <span>-$50</span>
                </li>
            </ul>
        </div><!-- end mobile coupon code details -->
    </div><!-- end mobile coupon code -->

    <h2>Payment Method</h2>
    <p id="payment_secruity_notice">All transactions are secure and encrypted. Credit card information is never
        stored.</p>
    <form>
        <div id="checkout-step-payment">
            <dl>
                <dt>
                    <input type="radio" id="p_method_1" checked name="shipping_method_type">
                    <label for="p_method_1">
                        <span>Credit Card</span>
                        <ul>
                            <li><img src="../images/cc_visa_dark.svg"></li>
                            <li><img src="../images/cc_mastercard_dark.svg"></li>
                            <li><img src="../images/cc_amex_dark.svg"></li>
                            <li><img src="../images/cc_discover_dark.svg"></li>
                        </ul>
                    </label>
                </dt>
                <dd class="active">
                    <label for="authorizenet_cc_type">Credit Card Type</label>
                    <select>
                        <option>Select Credit Card Type</option>
                    </select>
                    <div id="card_number">
                        <label for="authorizenet_cc_number">Card Number</label>
                        <input type="text" id="authorizenet_cc_number">
                    </div><!-- end card number -->
                    <div id="card_expiration">
                        <label for="authorizenet_expiration">Expiration Date</label>
                        <select id="authorizenet_expiration">
                            <option>Month</option>
                        </select>
                        <select id="authorizenet_expiration_yr">
                            <option>Year</option>
                        </select>
                    </div><!-- end card expiration -->
                    <div id="card_cvv">
                        <label for="authorizenet_cc_cid">CVV</label>
                        <input type="text">
                        <i id="cvv_info_toggle" class="fa fa-question-circle">
                            <div id="cvv_info">
                                <p>Credit Card Security Code</p>
                                <p>3 digits, usually found on back of the card</p>
                                <p>American Express has 4 digits on the front</p>
                            </div><!-- end cvv info -->
                        </i><!-- end c
                    </div><!-- end card cvv -->
                </dd>
                <dt>
                    <input type="radio" id="p_method_2" name="shipping_method_type">
                    <label for="p_method_2">
                        <img src="../images/paypal_logo.png">
                    </label>
                </dt>
                <dd>
                    <div id="paypal_redirect">
                        <i class="fa fa-thumbs-o-up"></i><span>You will be redirected to PayPal to complete your purchase
                    securely.</span>
                    </div>
                </dd>
            </dl>
        </div><!-- end shipping methods -->
        <h2>Billing Address</h2>
        <div id="billing-address">
            <dl>
                <dt>
                    <input type="radio" id="billing:use_shipping_yes" checked name="billing_address">
                    <label for="billing:use_shipping_yes">
                        Same as Shipping Address
                    </label>
                </dt>
                <dt>
                    <input type="radio" id="billing:use_shipping_no" name="billing_address">
                    <label for="billing:use_shipping_no">
                        Use a Different Billing Address
                    </label>
                </dt>
                <dd>
                    <div class="fieldset">
                        <div class="name-firstname short_1">
                            <label>First Name</label>
                            <div class="input-box">
                                <input type="text">
                            </div>
                        </div><!-- end firstname -->
                        <div class="name-lastname short_2">
                            <label>Last Name</label>
                            <div class="input-box">
                                <input type="text">
                            </div>
                        </div><!-- end lastname -->
                        <div class="billing-company">
                            <label>Company</label>
                            <div class="input-box">
                                <input type="text" placeholder="(optional)">
                            </div>
                        </div><!-- end company -->
                        <div class="billing-street-1 short_1">
                            <label>Address</label>
                            <div class="input-box">
                                <input type="text">
                            </div>
                        </div><!-- end street 1 -->
                        <div class="billing-street-2 short_2">
                            <div class="input-box">
                                <input type="text" placeholder="Apt, Suite, etc. (optional)">
                            </div>
                        </div><!-- end street 2 -->
                        <div class="billing-city">
                            <label>City</label>
                            <div class="input-box">
                                <input type="text">
                            </div>
                        </div><!-- end city -->
                        <div class="billing-region short_1">
                            <label>State</label>
                            <div class="input-box">
                                <select>
                                    <option>Select State</option>
                                </select>
                            </div>
                        </div><!-- end state -->
                        <div class="billing-postcode short_2">
                            <label>Zipcode</label>
                            <div class="input-box">
                                <div class="input-box">
                                    <input type="text">
                                </div>
                            </div>
                        </div><!-- end zipcode -->
                        <div class="billing-country short_1">
                            <label>Country</label>
                            <div class="input-box">
                                <select>
                                    <option>United States</option>
                                </select>
                            </div>
                        </div><!-- end zipcode -->
                        <div class="billing-telephone short_2">
                            <label>Phone</label>
                            <div class="input-box">
                                <div class="input-box">
                                    <input type="text">
                                </div>
                            </div>
                        </div><!-- end phone -->
                    </div><!-- end fieldset -->
                </dd>
            </dl>
        </div><!-- end billing address -->
    </form>

    <div class="buttons-set">
        <button type="button" onclick="window.location.href = '/checkout_step_4.php'"><i
                class="fa fa-refresh fa-spin"></i><span>Continue</span></button>
        <p class="back-link">
            <a href="/checkout_step_2.php">Back</a>
        </p>
    </div><!-- end buttons set -->

</section><!-- end checkout step content -->


<?php include 'includes/checkout_footer.php' ?>
