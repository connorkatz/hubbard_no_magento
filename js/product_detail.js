// -------------------------------------
// Functions
// -------------------------------------
function showOptionItems(optionList) {
    hideOptionItems();
    optionList.prev().addClass('active');
    optionList.slideDown('fast');
}

function hideOptionItems(optionList) {
    if(optionList) {
        optionList.prev().removeClass('active');
        optionList.slideUp('fast');
    }
    else {
        $j('.prod_option_items').slideUp('fast').prev().removeClass('active');
    }
}

function changeOptionText(optionGroup, optionText) {
    optionGroup.children('span').text(optionText);
}


function showCartPreview() {
    $j('html,body').scrollTop(0),
    $j('#cart_preview').show();
}

function hideCartPreview() {
    $j('#cart_preview').fadeOut();
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    // show option dropdown menus
    $j('.prod_option_select span').click(function() {
        var $this = $j(this);
        var optionList = $this.next();
        if($this.hasClass('active')) {
            hideOptionItems(optionList);
        }
        else {
            showOptionItems(optionList);
        }

    });

    // swap option text
    $j('.prod_option_items li').click(function() {
        var $this = $j(this);
        var optionGroup = $this.parents('.prod_option_select');
        var optionList = $this.parent();
        var optionText = $this.text();
        optionList.children().removeClass('active');
        $this.addClass('active');
        changeOptionText(optionGroup, optionText);
        hideOptionItems(optionList);
    });

    // setup option dropdown grid
    setupOptionListGrid($j('.prod_option_items'));


    // testimonials slider
    $j('#review_callouts > ul').bxSlider({
        oneToOneTouch: false,
        hideControlOnEnd: true,
        pagerSelector: '#review_nav_pages',
        prevSelector: '.review_nav_arrow.prev',
        prevText: '&#xf104;',
        nextSelector: '.review_nav_arrow.next',
        nextText: '&#xf105;'
    });

    $j('#size_guide_more_info_toggle').click(function() {
        $j('#size_guide_more_info').slideDown();
        return false;
    });

    // lifestyle images slider
    var lifestyleSlider = $j('#lifestyle_images_inner > ul').bxSlider({
        oneToOneTouch: false,
        hideControlOnEnd: true,
        pagerSelector: '#lifestyle_nav_pages',
        prevSelector: '.lifestyle_nav_arrow.prev',
        prevText: '&#xf104;',
        nextSelector: '.lifestyle_nav_arrow.next',
        nextText: '&#xf105;',
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 400
    });

    // show cart preview
    $j('#atc_row button').click(function() {
        hideScrollArrow();
        showCartPreview();
        return false;
    });

    // hide cart preview
    $j('#cart_preview_continue').click(function() {
        hideCartPreview();
        return false;
    });
    
    // go to customer reviews
    $j('#more_reviews a, #prod_review_summary').click(function() {
        scrollToAnchor('customer_reviews');
        return false;
    });
    
    $j('#size_guide a, #shoe_care_toggle a').simpleModal();


}); // end document ready