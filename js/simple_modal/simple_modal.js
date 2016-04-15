(function($) {

    $.fn.simpleModal = function() {

        var $triggers = $(this);
        $triggers.click(function() {
            var modalID = $(this).attr('href');
            if($(modalID).length) {
                $.scrollLock(true);
                $('.modals_background').addClass('active');
                $(modalID).addClass('active');

                $('.close_modal').click(function() {
                    $('.modal').removeClass('active');
                    $('.modals_background').removeClass('active');
                    $.scrollLock(false);
                    event.stopPropagation();
                });
            }
            return false;
        });
    };

}(jQuery));