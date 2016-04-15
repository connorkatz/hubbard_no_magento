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
    <section id="customer_panel_account" class="customer_account_block active">
        <h2>Your Account</h2>
        <h3>Name &amp; Email</h3>
        <div class="customer_account_static_content">
            John Smith<br>
            john@whatver.com
            <a href="/customer_account_edit.php">Edit</a>
        </div><!-- end static content -->
        <h2>Orders</h2>
        <section id="customer_account_orders">
            <table>
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Order #</th>
                    <th>Ship To</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1/12/16</td>
                    <td>100006639</td>
                    <td>Jane Smith</td>
                    <td>$102.61</td>
                    <td>Complete</td>
                    <td><a href="/customer_view_order">View Order</a></td>
                </tr>
                <tr>
                    <td>1/12/16</td>
                    <td>100006639</td>
                    <td>Jane Smith</td>
                    <td>$102.61</td>
                    <td>Complete</td>
                    <td><a href="/customer_view_order">View Order</a></td>
                </tr>
                <tr>
                    <td>1/12/16</td>
                    <td>100006639</td>
                    <td>Jane Smith</td>
                    <td>$102.61</td>
                    <td>Complete</td>
                    <td><a href="/customer_view_order">View Order</a></td>
                </tr>
                </tbody>
            </table>
        </section><!-- end account orders -->
    </section><!-- end account block -->

    <section id="customer_panel_addresses" class="customer_account_block">
        <h2>Default Addresses</h2>
        <section id="customer_addresses_group">
            <div class="customer_address_item">
                <h3>Default Billing Address</h3>
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer address -->
            <div class="customer_address_item">
                <h3>Default Shippping Address</h3>
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer address -->
        </section><!-- end customer default addressses -->
        <h2>Additional Addresses</h2>
        <div id="customer_add_new_address">
            <a href="/customer_address_add.php">Add New Address</a>
        </div><!-- end add new address -->
        <section id="customer_addresses_group">
            <div class="customer_address_item">
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer address -->
            <div class="customer_address_item">
                <b>Steve Smith</b>
                <address>
                    1234 Some St<br>
                    Somewhere, CA, 93401<br>
                    United States<br>
                    <span>805 555-1212</span>
                    <a href="/customer_address_edit.php">Edit</a>
                </address>
            </div><!-- end customer address -->
        </section><!-- end customer default addressses -->
    </section><!-- end account block -->

    <script src="../js/customer.js"></script>
<?php include 'includes/footer.php'; ?>