<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Order Information</h1>
    <hr class="decorative_break_2">
    <section class="basic_form_intro">
        <h6>Already have an account?</h6>
        <p class="padded"><a href="/customer_login.php">Login</a>&nbsp;&nbsp;to access your orders.</p>
        <p>Otherwise, please fill out the form below to find your order.</p>
    </section><!-- end basic form intro -->
    <section class="basic_form_box">
        <div class="basic_form_box_inner">
            <form>
                <label for="order_number">Order Number</label>
                <div class="input-box">
                    <input type="text" id="order_number">
                </div>
                <label for="lastname">Billing Last Name</label>
                <div class="input-box">
                    <input type="text" id="lastname">
                </div>
                <label for="email">Email</label>
                <div class="input-box">
                    <input type="email" id="email">
                </div>
                <button type="button" onclick="window.location.href = '/sales_guest_order.php'">Find Order</button>
            </form>
        </div><!-- end basic form box inner -->
    </section><!-- end basic form box -->

    <script src="../js/customer.js"></script>
<?php include 'includes/footer.php'; ?>