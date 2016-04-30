<?php include 'includes/header.php'; ?>


    <div id="guest_order" class="customer_orders_details customer_account_block">
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


    <script src="../js/customer.js"></script>
<?php include 'includes/footer.php'; ?>