<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Create Your Account</h1>
    <hr class="decorative_break_2">
    <section id="basic_form_box">
        <div id="basic_form_box_inner">
            <form>
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
                <label for="password">Password</label>
                <div class="input-box">
                    <input type="password" id="password">
                </div>
                <label for="confirm">Confirm Password</label>
                <div class="input-box">
                    <input type="password" id="confirm">
                </div>
                <button type="submit">Create Account</button>
            </form>
        </div><!-- end basic form box inner -->
    </section><!-- end basic form box -->


<?php include 'includes/footer.php'; ?>