<?php include 'includes/header.php'; ?>


    <h1 class="page_header">Your Account</h1>
    <hr class="decorative_break_2">
    <section id="customer_account_choice">
        <ul>
            <li>
                <h2>Account Login</h2>
                <form>
                    <div class="form-list">
                        <div class="customer_account_choice_content">
                            <label for="email">Email</label>
                            <div class="input-box">
                                <input type="email" id="email">
                            </div>
                            <label for="pass">Password</label>
                            <div class="input-box">
                                <input type="password" id="pass">
                            </div>
                            <button type="button" onclick="window.location.href = '/customer_account.php'">Login</button>
                            <a href="/customer_forgot_password.php" class="forgot_password">Forgot Your Password?</a>
                        </div><!-- end customer choice content -->
                    </div><!-- end form list -->
                </form>
            </li>
            <li>
                <h2>Create an Account</h2>
                <div class="customer_account_choice_content">
                    <p>By creating an account with Samuel Hubbard, you will be able to move through the checkout
                        process faster, store multiple shipping addresses, view and track your orders in your
                        account and more.</p>
                    <a class="button" href="/customer_account_create.php">Create Account</a>
                </div><!-- end customer choice content -->
            </li>
        </ul>
    </section><!-- end customer account choice -->


<?php include 'includes/footer.php'; ?>