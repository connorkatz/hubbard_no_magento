<?php include 'includes/checkout_header.php' ?>
<?php include 'includes/checkout_breadcrumbs.php' ?>

<?php include 'includes/checkout_order_summary.php' ?>

<section id="checkout_layout_block_2">
    <h2>Welcome Back</h2>
    <form>

        <div id="customer_logged_in">
            <p>John Smith</p>
            <span>johnsmith@whatever.com</span>
            <a href="/checkout_step_1.php">Log Out</a>
        </div><!-- end customer logged in -->

        <div id="shipping_address_form" class="form-list active">
            <h2>Shipping Address</h2>
            <div class="customer_address_select shipping-region fieldset">
                <label>Saved Addresses</label>
                <div class="input-box">
                    <select>
                        <option>New Address</option>
                        <option selected>1234 Some St, Somewhere, California, United States</option>
                        <option>5678 Somewhere Else Way, Somewhere Else, Wisconsin, United States</option>
                    </select>
                </div>
            </div><!-- end state -->
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
                <div class="shipping-company">
                    <label>Company <span>&nbsp;&mdash;&nbsp;optional</span></label>
                    <div class="input-box">
                        <input type="text">
                    </div>
                </div><!-- end company -->
                <div class="shipping-street-1">
                    <label>Address</label>
                    <div class="input-box">
                        <input type="text">
                    </div>
                </div><!-- end street 1 -->
                <div class="shipping-street-2">
                    <div class="input-box">
                        <input type="text" placeholder="Apt, Suite, etc. (optional)">
                    </div>
                </div><!-- end street 2 -->
                <div class="shipping-city">
                    <label>City</label>
                    <div class="input-box">
                        <input type="text">
                    </div>
                </div><!-- end city -->
                <div class="shipping-region short_1">
                    <label>State</label>
                    <div class="input-box">
                        <select>
                            <option>Select State</option>
                        </select>
                    </div>
                </div><!-- end state -->
                <div class="shipping-postcode short_2">
                    <label>Zipcode</label>
                    <div class="input-box">
                        <div class="input-box">
                            <input type="text">
                        </div>
                    </div>
                </div><!-- end zipcode -->
                <div class="shipping-country short_1">
                    <label>Country</label>
                    <div class="input-box">
                        <select>
                            <option>United States</option>
                        </select>
                    </div>
                </div><!-- end zipcode -->
                <div class="shipping-telephone short_2">
                    <label>Phone</label>
                    <div class="input-box">
                        <div class="input-box">
                            <input type="text">
                        </div>
                    </div>
                </div><!-- end phone -->
            </div><!-- end fieldset -->
            <div class="buttons-set">
                <button type="button" onclick="window.location.href = '/checkout_step_2.php'"><i class="fa fa-refresh fa-spin"></i><span>Continue</span></button>
                <p class="back-link">
                    <a href="/cart.php">Back</a>
                </p>
            </div><!-- end buttons set -->
        </div><!-- end address form -->

    </form>
</section><!-- end checkout step content -->

<?php include 'includes/checkout_footer.php' ?>
