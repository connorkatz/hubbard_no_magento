<?php include 'includes/basic_header.php' ?>

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
        <h3>Here is what to expect</h3>
        <ul>
            <li><i class="fa fa-check-circle-o"></i><span>You will immediately receive an order confirmation email with all your order details.</span></li>
            <li><i class="fa fa-check-circle-o"></i><span>Once your order ships, usually within one business day, you will receive a shipping confirmation email with your tracking information.</span></li>
            <li><i class="fa fa-check-circle-o"></i><span>Tracking information may not be available immediately via UPS, but will be available within a few hours after receiving your shipping confirmation.</span></li>
            <li><i class="fa fa-check-circle-o"></i><span>Your Samuel Hubbard order will arrive via UPS. If no one is available at the delivery location, your order will be left in the usual delivery location, for instance your front door or porch.</span></li>
            <li><i class="fa fa-check-circle-o"></i><span>If you have any questions, simply give us a call at 844.482.4800 8-5 pacific time M-F. Or, if you prefer email, just write to <a href="mailto:susan@samuelhubbard.com">susan@samuelhubbard.com</a></span></li>
            <li><i class="fa fa-check-circle-o"></i><span>Thank you again for your order, we look forward to hearing from you soon, enjoy your Hubbards!</span></li>
        </ul>
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
