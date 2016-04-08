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

function showSizeGuideDetails() {
    $j('#size_guide').addClass('active');
}

function hideSizeGuideDetails() {
    $j('#size_guide').removeClass('active');
}

function showCartPreview() {
    $j('html,body').animate({scrollTop: 0}, '500', function() {
        $j('#cart_preview').slideDown();
    });
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
    setupListGrid($j('.prod_option_items'));

    // show size guide details
    $j('#size_guide > a').click(function() {
        showSizeGuideDetails();
        return false;
    });

    // close size guide details
    $j('#size_guide_close, #size_guide_continue').click(function() {
        hideSizeGuideDetails();
        return false;
    });

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
        slideWidth: 500
    });

    // show cart preview
    $j('#atc_row button').click(function() {
        showCartPreview();
        return false;
    });

    // hide cart preview
    $j('#cart_preview_continue').click(function() {
        hideCartPreview();
        return false;
    });
}); // end document ready