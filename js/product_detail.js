// -------------------------------------
// Functions
// -------------------------------------


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

}); // end document ready