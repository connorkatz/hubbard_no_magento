<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Account</h1>
    <hr class="decorative_break_2">
    <nav id="customer_account_nav">
        <ul>
            <li><a href="#customer_panel_account" class="active"><span>Account</span></a></li>
            <li><a href="#customer_panel_addresses"><span>Adresses</span></a></li>
            <li><a href="/"><span>Sign Out</span></a></li>
        </ul>
    </nav><!-- end account nav -->
    <section class="customer_details_group">
        <h2>Order #1000006639 &mdash; Complete</h2>
        <div class="customer_details_block">
            <h3>Shipping Address</h3>
            John Smith<br>
            <address>
                1234 Some Street<br>
                Somewhere, CA 90210<br>
                United States
            </address>
            <span>8055551212</span>
        </div><!-- end customer details block -->
        <div class="customer_details_block">
            <h3>Shipping Method</h3>
            UPS - Ground<br>
            Tracking: <a href="https://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=1Z3Y72500344990737">1Z3Y72500344990737</a>
        </div><!-- end customer details block -->

    </section><!-- end customer details group -->

    <script src="../js/customer.js"></script>
<?php include 'includes/footer.php'; ?>