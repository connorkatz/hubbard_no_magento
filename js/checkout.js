// -------------------------------------
// Functions
// -------------------------------------
function checkoutAsUser() {
    $j('#checkout_login_link').removeClass('active');
    $j('#shipping_address_form').removeClass('active');
    $j('#checkout_login_password').slideDown(
        function() {
            $j('#checkout_forgot_password_link, #checkout_no_login_link').addClass('active');
            $j('#checkout_login_button').addClass('active');
        }
    );

}

function checkoutAsGuest() {
    $j('#checkout_login_link').addClass('active');
    $j('#checkout_login_button').removeClass('active');
    $j('#checkout_login_password').slideUp(
        function() {
            $j('#shipping_address_form').addClass('active');
        }
    );
    $j('#checkout_forgot_password_link, #checkout_no_login_link').removeClass('active');
    $j('#checkout_login_link').addClass('active');
}


// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    // show hide user login
    $j('#checkout_login_link a').click(function() {
        checkoutAsUser();
        return false;
    });
    $j('#checkout_no_login_link a').click(function() {
        checkoutAsGuest();
        return false;
    });

    // show mobile checkout summary
    $j('#checkout_summary_header').click(function() {
        var $itemsContainer = $j('#checkout_summary_details_container');
        if($itemsContainer.hasClass('active')) {
            $itemsContainer.removeClass('active');
            $itemsContainer.slideUp();
        }
        else {
            $itemsContainer.addClass('active');
            $itemsContainer.slideDown()
        }
        $j('.order_summary_header').toggleClass('active');
    });

    $j('#cvv_info_toggle').click(function() {
        $j('#cvv_info').toggleClass('active');
    });

    $j('#checkout_footer_inner a').simpleModal();

    
});