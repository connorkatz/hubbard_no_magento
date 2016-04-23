// -------------------------------------
// Functions
// -------------------------------------
function getSlideId() {
    var heroSlideId = $j.urlParam('slide_id');
    if(heroSlideId) {
        return heroSlideId;
    }
    else {
        return 0;
    }
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    // set first slide from URL parameter
    var heroSlideId = getSlideId();

    // show filter list
    $j('#homepage_hero .full_width_slideshow_inner > ul').bxSlider({
        startSlide: heroSlideId,
        auto: true,
        oneToOneTouch: false,
        pagerSelector: '#homepage_hero_slideshow_nav',
        prevSelector: '#homepage_hero .prev',
        prevText: '&#xf104;',
        nextSelector: '#homepage_hero .next',
        nextText: '&#xf105;'
    });

    // testimonials slider
    $j('#homepage_review_callouts_inner > ul').bxSlider({
        oneToOneTouch: false,
        hideControlOnEnd: true,
        pagerSelector: '#homepage_review_nav_pages',
        prevSelector: '.homepage_review_nav_arrow.prev',
        prevText: '&#xf104;',
        nextSelector: '.homepage_review_nav_arrow.next',
        nextText: '&#xf105;'
    });
    
    

}); // end document ready