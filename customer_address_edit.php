<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Edit Address</h1>
    <hr class="decorative_break_2">
    <section class="basic_form_box">
        <div class="basic_form_box_inner">
            <form>
                <h2>Contact Information</h2>
                <label for="firstname">First Name</label>
                <div class="input-box">
                    <input type="text" id="firstname">
                </div>
                <label for="lastname">Last Name</label>
                <div class="input-box">
                    <input type="text" id="lastname">
                </div>
                <label for="company">Company</label>
                <div class="input-box">
                    <input type="email" id="company" placeholder="(optional)">
                </div>
                <label for="password">Phone</label>
                <div class="input-box">
                    <input type="password" id="phone">
                </div>
                <h2>Address</h2>
                <label for="address">Address</label>
                <div class="input-box">
                    <input type="text" id="address">
                </div>
                <div class="input-box">
                    <input type="text" id="firstname" placeholder="Apt, Suite, etc. (optional)">
                </div>
                <label for="city">City</label>
                <div class="input-box">
                    <input type="text" id="city">
                </div>
                <label for="state">State</label>
                <div class="input-box">
                    <select>
                        <option>Select State</option>
                    </select>
                </div>
                <label for="zipcode">Zipcode</label>
                <div class="input-box">
                    <input type="text" id="zipcode">
                </div>
                <label for="state">Country</label>
                <div class="input-box">
                    <select>
                        <option>United States</option>
                    </select>
                </div>
                <button type="button" onclick="window.location.href = '/customer_account.php'">Save Address</button>
            </form>
        </div><!-- end basic form box inner -->
    </section><!-- end basic form box -->


<?php include 'includes/footer.php'; ?>