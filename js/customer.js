// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    $j('#customer_account_nav a').click(function() {
        var target = $j(this).attr('href');
        if(target != 'customer_sign_out') {
            var tabNav = $j('#customer_account_nav a');
            var tabGroup = $j('.customer_account_block');
            changeTab(target, tabNav, tabGroup);
            return false;
        }
    });

    $j('#customer_update_password_option label').click(function() {
        var $this = $j(this);
        var passwordContent = $j('#customer_edit_password');
        if($this.hasClass('active')) {
            $this.removeClass('active');
            passwordContent.slideUp();
        }
        else {
            $this.addClass('active');
            passwordContent.slideDown();
        }
    });


}); // end document ready