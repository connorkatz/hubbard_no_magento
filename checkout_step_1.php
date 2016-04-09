<?php include 'includes/checkout_header.php' ?>
<?php include 'includes/checkout_steps.php' ?>

<section id="checkout_layout_block_1">
    <h3>Your Order</h3>
    <section class="checkout_item_block">
        <div class="co_item_image">
            <img src="../images/product_images/hubbard_free_tan_waxhide.jpg">
            <span>1</span>
        </div><!-- end chekout item image -->
    </section><!-- end checkout item block -->
</section><!-- end checkout details block -->

<section id="checkout_layout_block_2">
    <h2>Customer Information</h2>
    <form>
        <label>Email</label>
        <div class="input-box">
            <input type="email">
        </div>
        <p id="login_prompt">Already have an account? <a href="#">Log In</a></p>
        <h2>Shipping Address</h2>
        <div class="name-firstname">
            <label>First Name</label>
            <div class="input-box">
                <input type="text">
            </div>
        </div><!-- end firstname -->
        <div class="name-lastname">
            <label>Last Name</label>
            <div class="input-box">
                <input type="text">
            </div>
        </div><!-- end lastname -->
        <div class="shipping-company">
            <label>Company</label>
            <div class="input-box">
                <input type="text" placeholder="optional">
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
                <input type="text">
            </div>
        </div><!-- end street 2 -->
        <div class="shipping-city">
            <label>City</label>
            <div class="input-box">
                <input type="text">
            </div>
        </div><!-- end city -->
        <div class="shipping-region">
            <label>State</label>
            <div class="input-box">
                <select>
                    <option>Select State</option>
                </select>
            </div>
        </div><!-- end state -->
        <div class="shipping-postcode">
            <label>Zipcode</label>
            <div class="input-box">
                <div class="input-box">
                    <input type="text">
                </div>
            </div>
        </div><!-- end zipcode -->
        <div class="shipping-telephone">
            <label>Phone</label>
            <div class="input-box">
                <div class="input-box">
                    <input type="text">
                </div>
            </div>
        </div><!-- end phone -->
        <div id="save_information">
            <input type="checkbox" checked>
            <label>Save my information</label>
            <p>Easier order tracking and returns</p>
        </div>
        <button type="button">Continue</button>
    </form>
    <div id="checkout_previous_step">
        <a href="#">Back</a>
    </div><!-- end checkout previous step -->
</section><!-- end checkout step content -->


<?php include 'includes/checkout_footer.php' ?>
