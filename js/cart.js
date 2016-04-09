

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    $j('#show_coupon span, #show_coupon label').click(function() {
        var $parent = $j(this).parent();
        if ($parent.hasClass('active')) {
            $parent.removeClass('active');
            $parent.children('#cart_coupon_codes').slideUp();
        }
        else {
            $parent.addClass('active');
            $parent.children('#cart_coupon_codes').slideDown(
                function() {
                    $j('#coupon_input input').focus();
                }
            );
        }
    });

}); // end document ready