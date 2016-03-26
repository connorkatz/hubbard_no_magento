// -------------------------------------
// Functions
// -------------------------------------
function showOptionItems(optionList) {
    optionList.slideDown();
}

function hideOptionItems(optionList) {
    optionList.slideUp();
}

function changeOptionText(optionGroup, optionText) {
    optionGroup.children('span').text(optionText);
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    prodImagesSlider = $j('#prod_main_image_inner ul').bxSlider({
        pagerSelector: '#prod_slider_pages',
        nextText: '&#xf054;',
        nextSelector: '#prod_slider_right',
        prevText: '&#xf053;',
        prevSelector: '#prod_slider_left',
        oneToOneTouch: false
    });

    $j('.prod_option_select span').click(function() {
        var optionList = $j(this).next();
        showOptionItems(optionList);
    });

    $j('.prod_option_items li').click(function() {
        var $this = $j(this);
        var optionGroup = $this.parents('.prod_option_select');
        var optionList = $this.parent();
        var optionText = $this.text();
        changeOptionText(optionGroup,optionText);
        hideOptionItems(optionList);
    });

}); // end document ready