<?php include 'includes/checkout_header.php' ?>
<?php include 'includes/checkout_breadcrumbs.php' ?>

<?php include 'includes/checkout_order_summary.php' ?>

<section id="checkout_layout_block_2">
    <h2>Customer Information</h2>
    <form>
        <div class="fieldset">
            <label>Email</label>
            <div class="input-box">
                <input type="email">
            </div>
            <div id="checkout_login_password">
                <label>Password</label>
                <div class="input-box">
                    <input type="password">
                </div>
            </div><!-- end email -->
            <div id="checkout_login_button" class="buttons-set">
                <button type="button" onclick="window.location.href = '/checkout_step_1_logged_in.php'"><i class="fa fa-refresh fa-spin"></i><span>Login</span></button>
            </div><!-- end button set -->
            <p id="checkout_forgot_password_link"><a href="#">Forgot Your Password?</a></p>
            <p id="checkout_no_login_link"><a href="#">Checkout as Guest</a></p>
            <p id="checkout_login_link" class="active">Already have an account? <a href="#">Log In</a></p>
        </div><!-- end fieldset -->


        <div id="shipping_address_form" class="form-list active">
            <h2>Shipping Address</h2>
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
                    <label>Company</label>
                    <div class="input-box">
                        <input type="text" placeholder="(optional)">
                    </div>
                </div><!-- end company -->
                <div class="shipping-street-1 short_1">
                    <label>Address</label>
                    <div class="input-box">
                        <input type="text">
                    </div>
                </div><!-- end street 1 -->
                <div class="shipping-street-2 short_2">
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
            <div id="save_information">
                <input type="checkbox" checked>
                <label>
                    Save my information
                    <p>Easy order tracking and returns</p>
                </label>

            </div>
            <div class="buttons-set">
                <button type="button" onclick="window.location.href = '/checkout_step_2.php'"><i class="fa fa-refresh fa-spin"></i><span>Continue</span></button>
                <p class="back-link">
                    <a href="/cart.php">Back</a>
                </p>
            </div><!-- end buttons set -->
        </div><!-- end form list -->

    </form>
</section><!-- end checkout step content -->

<?php include 'includes/checkout_footer.php' ?>
