// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    // show filter list
    $j('#homepage_hero .full_width_slideshow_inner > ul').bxSlider({
        auto: true,
        oneToOneTouch: false,
        pagerSelector: '#homepage_hero_slideshow_nav',
        prevSelector: '#homepage_hero .prev',
        prevText: '&#xf104;',
        nextSelector: '#homepage_hero .next',
        nextText: '&#xf105;'
    });


}); // end document ready