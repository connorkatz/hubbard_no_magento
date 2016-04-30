// -------------------------------------
// Functions
// -------------------------------------
function checkoutAsUser() {
    $j('#checkout_login_link').removeClass('active');
    $j('#shipping_address_form').removeClass('active');
    $j('#checkout_login_user').addClass('active');

}

function checkoutAsGuest() {
    $j('#checkout_login_user').removeClass('active');
    $j('#shipping_address_form').addClass('active');
    $j('#checkout_login_link').addClass('active');
}

function changeCheckoutOptions() {
    $j('.checkout_option_group dt input[type="radio"]').change(function() {
        var $this = $j(this);
        var $parent = $this.parent();
        var $parentGroup = $this.parents('dl');
        $parentGroup.children('dd').removeClass('active');
        $parent.next().addClass('active')
    });
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

    // show CVV details
    $j('#cvv_info_toggle').click(function() {
        $j('#cvv_info').toggleClass('active');
    });

    // change checkout options
    changeCheckoutOptions();

    // show order followup options
    $j('#order_followup input[type="radio"]').change(function() {
        $j('.order_followup_details').removeClass('active');
        var $parent = $j(this).parent();
        var $parentDetails = $parent.children('.order_followup_details')
        if($parentDetails) {
            $parentDetails.addClass('active');
        }
    });

    // checkout modals
    $j('#checkout_footer_inner a').simpleModal();

    
});