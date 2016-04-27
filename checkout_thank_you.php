<?php include 'includes/checkout_header.php' ?>

<section id="order_thank_you_content">

    <h1 class="page_header">Thank you for your order</h1>
    <section id="account_activate">
        <h2>Activate your Account </h2>
        <div id="account_activate_inner">
            <p>Your Account is Ready</p>
            <p>Enter a password for easy access to order tracking, returns and future orders.</p>
            <div id="account_activate_input">
                <form>
                    <input type="password" placeholder="Your Password">
                    <button type="submit"><i class="fa fa-refresh fa-spin"></i><span>Activate</span></button>
                </form>
            </div><!-- end account activate input -->
        </div><!-- end account activate inner -->
    </section><!-- end account activate password -->

    <section id="order_followup">
        <h3>By the Way<span>How did you hear about us?</span></h3>
        <form>
            <ul>
                <li>
                    <input type="radio" id="mag_newspaper" name="order_followup">
                    <label for="mag_newspaper">Magazine/Newspaper Ad</label>
                    <div class="order_followup_details">
                        <select>
                            <option>Please select Magazine/Newspaper</option>
                        </select>
                    </div><!-- en followup details -->
                </li>
                <li>
                    <input type="radio" id="press" name="order_followup">
                    <label for="press">Press (Article, Blog)</label>
                </li>
                <li>
                    <input type="radio" id="friend" name="order_followup">
                    <label for="friend">Friend/Family</label>
                </li>
                <li>
                    <input type="radio" id="online_ad" name="order_followup">
                    <label for="online_ad">Online Ad</label>
                </li>
                <li>
                    <input type="radio" id="retail" name="order_followup">
                    <label for="retail">Retail Store</label>
                </li>
                <li>
                    <input type="radio" id="social" name="order_followup">
                    <label for="social">Social Media</label>
                </li>
                <li>
                    <input type="radio" id="catalog" name="order_followup">
                    <label for="catalog">Catalog</label>
                </li>
                <li>
                    <input type="radio" id="other" name="order_followup">
                    <label for="other">Other</label>
                    <div class="order_followup_details">
                        <textarea placeholder="Please Describe"></textarea>
                    </div><!-- en followup details -->
                </li>
            </ul>
            <button type="submit">Submit</button>
        </form>
    </section><!-- end order followup -->

    <section id="order_social_links">
        <h3>Other Ways to Keep in Touch</h3>
        <ul>
            <?php include 'includes/social_links.php' ?>
        </ul>
    </section><!-- end order social links -->

    <section id="order_continue_shopping">
        <div id="order_continue_shopping_link">
            <a href="/">Continue Shopping</a>
        </div><!-- end order continue shopping link -->
    </section><!-- end order social links -->

</section><!-- end order thank you content -->
