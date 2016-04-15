<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Edit Your Account</h1>
    <hr class="decorative_break_2">
    <section id="basic_form_box">
        <div id="basic_form_box_inner">
            <form>
                <h2>Profile</h2>
                <label for="firstname">First Name</label>
                <div class="input-box">
                    <input type="text" id="firstname">
                </div>
                <label for="lastname">Last Name</label>
                <div class="input-box">
                    <input type="text" id="lastname">
                </div>
                <label for="email">Email</label>
                <div class="input-box">
                    <input type="email" id="email">
                </div>
                <div id="customer_update_password_option">
                    <label for="update_password">Update Password</label>
                </div><!-- end update password option -->
                <div id="customer_edit_password">
                    <h2>Password</h2>
                    <label for="current_password">Current Password</label>
                    <div class="input-box">
                        <input type="password" id="current_password">
                    </div>
                    <label for="new_password">New Password</label>
                    <div class="input-box">
                        <input type="password" id="new_password">
                    </div>
                    <label for="confirm">Confirm Password</label>
                    <div class="input-box">
                        <input type="password" id="confirm">
                    </div>
                </div><!-- end customer edit password -->

                <button type="button" onclick="window.location.href = '/customer_account.php'">Update Account</button>
            </form>
        </div><!-- end basic form box inner -->
    </section><!-- end basic form box -->

    <script src="../js/customer.js"></script>
<?php include 'includes/footer.php'; ?>