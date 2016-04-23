<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Account</h1>
    <hr class="decorative_break_2">
    <nav id="customer_account_nav">
        <ul>
            <li class="item_1"><a href="#customer_panel_account" class="active"><span>Account</span></a></li>
            <li class="item_2"><a href="#customer_panel_addresses"><span>Adresses</span></a></li>
            <li class="item_3"><a href="/"><span>Sign Out</span></a></li>
        </ul>
    </nav><!-- end account nav -->
    <section id="customer_panel_account" class="customer_account_block active">
        <h2>Your Account</h2>
        <h3>Name &amp; Email</h3>
        <div class="customer_details_block full_width">
            <b>John Smith</b>
            john@whatver.com
            <a href="/customer_account_edit.php">Edit</a>
        </div><!-- end static content -->
        <h2>Orders</h2>
        <section id="customer_account_orders">
            <div id="customer_orders_header">
                <ul>
                    <li>Date</li>
                    <li>Order #</li>
                    <li>Ship To</li>
                    <li>Total</li>
                </ul>
            </div><!-- end customer orders header -->
            <div class="customer_orders_item">
                <ul>
                    <li><i></i>1/12/16</li>
                    <li>100006639</li>
                    <li>Jane Smith</li>
                    <li>$102.61</li>
                </ul>
                <div class="customer_orders_details">
                    <h2>Order #1000006639 &mdash; Complete</h2>
                    <div class="customer_details_block">
                        <h3>Shipping Address</h3>
                        <b>John Smith</b>
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
                        Tracking: <a
                            href="https://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=1Z3Y72500344990737">1Z3Y72500344990737</a>
                    </div><!-- end customer details block -->
                    <div class="customer_details_block">
                        <h3>Billing Address</h3>
                        John Smith
                        <address>
                            1234 Some Street<br>
                            Somewhere, CA 90210<br>
                            United States
                        </address>
                        <span>8055551212</span>
                    </div><!-- end customer details block -->
                    <div class="customer_details_block">
                        <h3>Payment Method</h3>
                        PayPal<br>
                        Payer Email &mdash; johnsmith@whatever.com
                    </div><!-- end customer details block -->
                    <div class="customer_details_block full_width">
                        <h3>Order Items</h3>
                        <div class="customer_order_items_group">
                            <div class="customer_order_items_header">
                                <ul>
                                    <li class="item_1">Item</li>
                                    <li class="item_2">Sku</li>
                                    <li class="item_3">Price</li>
                                    <li class="item_4">Qty</li>
                                    <li class="item_5">Subtotal</li>
                                </ul>
                            </div><!-- end customer order items header -->
                            <div class="customer_order_item_block">
                                <ul>
                                    <li class="item_1">
                                        <b>Hubbard Free</b>
                                        <ul>
                                            <li><span>Color </span>Tan Waxhide</li>
                                            <li><span>Width </span>Wide</li>
                                            <li><span>Size </span>10</li>
                                        </ul>
                                    </li>
                                    <li class="item_2">M1100-005-W100</li>
                                    <li class="item_3">$210</li>
                                    <li class="item_4">1</li>
                                    <li class="item_5">$210</li>
                                </ul>
                            </div><!-- end customer order item block -->
                            <div class="customer_order_item_block">
                                <ul>
                                    <li class="item_1">
                                        <b>Hubbard Free</b>
                                        <ul>
                                            <li><span>Color </span>Tan Waxhide</li>
                                            <li><span>Width </span>Wide</li>
                                            <li><span>Size </span>10</li>
                                        </ul>
                                    </li>
                                    <li class="item_2">M1100-005-W100</li>
                                    <li class="item_3">$210</li>
                                    <li class="item_4">1</li>
                                    <li class="item_5">$210</li>
                                </ul>
                            </div><!-- end customer order item block -->
                        </div><!-- end customer order items group -->
                        <div id="customer_order_items_summary">
                            <ul>
                                <li>
                                    <label>Subtotal</label>
                                    <span>$420</span>
                                </li>
                                <li>
                                    <label>Shipping</label>
                                    <span>FREE</span>
                                </li>
                                <li>
                                    <label>Discount</label>
                                    <span>-$50</span>
                                </li>
                                <li>
                                    <label>Total</label>
                                    <span>$370</span>
                                </li>
                            </ul>
                        </div><!-- end customer order items summary -->
                    </div><!-- end customer details block -->
                </div><!-- end customer order details -->
            </div><!-- end customer orders item -->

            <div class="customer_orders_item">
                <ul>
                    <li><i></i>1/12/16</li>
                    <li>100006639</li>
                    <li>Jane Smith</li>
                    <li>$102.61</li>
                </ul>
                <div class="customer_orders_details">
                    <h2>Order #1000006639 &mdash; Complete</h2>
                    <div class="customer_details_block">
                        <h3>Shipping Address</h3>
                        <b>John Smith</b>
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
                        Tracking: <a
                            href="https://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=1Z3Y72500344990737">1Z3Y72500344990737</a>
                    </div><!-- end customer details block -->
                    <div class="customer_details_block">
                        <h3>Billing Address</h3>
                        John Smith
                        <address>
                            1234 Some Street<br>
                            Somewhere, CA 90210<br>
                            United States
                        </address>
                        <span>8055551212</span>
                    </div><!-- end customer details block -->
                    <div class="customer_details_block">
                        <h3>Payment Method</h3>
                        PayPal<br>
                        Payer Email &mdash; johnsmith@whatever.com
                    </div><!-- end customer details block -->
                    <div class="customer_details_block full_width">
                        <h3>Order Items</h3>
                        <div class="customer_order_items_group">
                            <div class="customer_order_items_header">
                                <ul>
                                    <li class="item_1">Item</li>
                                    <li class="item_2">Sku</li>
                                    <li class="item_3">Price</li>
                                    <li class="item_4">Qty</li>
                                    <li class="item_5">Subtotal</li>
                                </ul>
                            </div><!-- end customer order items header -->
                            <div class="customer_order_item_block">
                                <ul>
                                    <li class="item_1">
                                        <b>Hubbard Free</b>
                                        <ul>
                                            <li><span>Color </span>Tan Waxhide</li>
                                            <li><span>Width </span>Wide</li>
                                            <li><span>Size </span>10</li>
                                        </ul>
                                    </li>
                                    <li class="item_2">M1100-005-W100</li>
                                    <li class="item_3">$210</li>
                                    <li class="item_4">1</li>
                                    <li class="item_5">$210</li>
                                </ul>
                            </div><!-- end customer order item block -->
                            <div class="customer_order_item_block">
                                <ul>
                                    <li class="item_1">
                                        <b>Hubbard Free</b>
                                        <ul>
                                            <li><span>Color </span>Tan Waxhide</li>
                                            <li><span>Width </span>Wide</li>
                                            <li><span>Size </span>10</li>
                                        </ul>
                                    </li>
                                    <li class="item_2">M1100-005-W100</li>
                                    <li class="item_3">$210</li>
                                    <li class="item_4">1</li>
                                    <li class="item_5">$210</li>
                                </ul>
                            </div><!-- end customer order item block -->
                        </div><!-- end customer order items group -->
                        <div id="customer_order_items_summary">
                            <ul>
                                <li>
                                    <label>Subtotal</label>
                                    <span>$420</span>
                                </li>
                                <li>
                                    <label>Shipping</label>
                                    <span>FREE</span>
                                </li>
                                <li>
                                    <label>Discount</label>
                                    <span>-$50</span>
                                </li>
                                <li>
                                    <label>Total</label>
                                    <span>$370</span>
                                </li>
                            </ul>
                        </div><!-- end customer order items summary -->
                    </div><!-- end customer details block -->
                </div><!-- end customer order details -->
            </div><!-- end customer orders item -->

            <div class="customer_orders_item">
                <ul>
                    <li><i></i>1/12/16</li>
                    <li>100006639</li>
                    <li>Jane Smith</li>
                    <li>$102.61</li>
                </ul>
                <div class="customer_orders_details">
                    <h2>Order #1000006639 &mdash; Complete</h2>
                    <div class="customer_details_block">
                        <h3>Shipping Address</h3>
                        <b>John Smith</b>
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
                        Tracking: <a
                            href="https://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=1Z3Y72500344990737">1Z3Y72500344990737</a>
                    </div><!-- end customer details block -->
                    <div class="customer_details_block">
                        <h3>Billing Address</h3>
                        John Smith
                        <address>
                            1234 Some Street<br>
                            Somewhere, CA 90210<br>
                            United States
                        </address>
                        <span>8055551212</span>
                    </div><!-- end customer details block -->
                    <div class="customer_details_block">
                        <h3>Payment Method</h3>
                        PayPal<br>
                        Payer Email &mdash; johnsmith@whatever.com
                    </div><!-- end customer details block -->
                    <div class="customer_details_block full_width">
                        <h3>Order Items</h3>
                        <div class="customer_order_items_group">
                            <div class="customer_order_items_header">
                                <ul>
                                    <li class="item_1">Item</li>
                                    <li class="item_2">Sku</li>
                                    <li class="item_3">Price</li>
                                    <li class="item_4">Qty</li>
                                    <li class="item_5">Subtotal</li>
                                </ul>
                            </div><!-- end customer order items header -->
                            <div class="customer_order_item_block">
                                <ul>
                                    <li class="item_1">
                                        <b>Hubbard Free</b>
                                        <ul>
                                            <li><span>Color </span>Tan Waxhide</li>
                                            <li><span>Width </span>Wide</li>
                                            <li><span>Size </span>10</li>
                                        </ul>
                                    </li>
                                    <li class="item_2">M1100-005-W100</li>
                                    <li class="item_3">$210</li>
                                    <li class="item_4">1</li>
                                    <li class="item_5">$210</li>
                                </ul>
                            </div><!-- end customer order item block -->
                            <div class="customer_order_item_block">
                                <ul>
                                    <li class="item_1">
                                        <b>Hubbard Free</b>
                                        <ul>
                                            <li><span>Color </span>Tan Waxhide</li>
                                            <li><span>Width </span>Wide</li>
                                            <li><span>Size </span>10</li>
                                        </ul>
                                    </li>
                                    <li class="item_2">M1100-005-W100</li>
                                    <li class="item_3">$210</li>
                                    <li class="item_4">1</li>
                                    <li class="item_5">$210</li>
                                </ul>
                            </div><!-- end customer order item block -->
                        </div><!-- end customer order items group -->
                        <div id="customer_order_items_summary">
                            <ul>
                                <li>
                                    <label>Subtotal</label>
                                    <span>$420</span>
                                </li>
                                <li>
                                    <label>Shipping</label>
                                    <span>FREE</span>
                                </li>
                                <li>
                                    <label>Discount</label>
                                    <span>-$50</span>
                                </li>
                                <li>
                                    <label>Total</label>
                                    <span>$370</span>
                                </li>
                            </ul>
                        </div><!-- end customer order items summary -->
                    </div><!-- end customer details block -->
                </div><!-- end customer order details -->
            </div><!-- end customer orders item -->

        </section><!-- end account orders -->
    </section><!-- end account block -->

    <section id="customer_panel_addresses" class="customer_account_block">
        <h2>Default Addresses</h2>
        <section class="customer_details_group">
            <div class="customer_details_block">
                <h3>Default Billing Address</h3>
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer details block -->
            <div class="customer_details_block">
                <h3>Default Shippping Address</h3>
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer details block -->
        </section><!-- end customer details group -->
        <h2>Additional Addresses</h2>
        <div id="customer_add_new_address">
            <a href="/customer_address_add.php">Add New Address</a>
        </div><!-- end add new address -->
        <section class="customer_details_group">
            <div class="customer_details_block">
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer details block -->
            <div class="customer_details_block">
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer address -->
        </section><!-- end customer details group -->
    </section><!-- end account block -->

    <script src="../js/customer.js"></script>
<?php include 'includes/footer.php'; ?>