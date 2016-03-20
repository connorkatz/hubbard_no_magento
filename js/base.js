// -------------------------------------
// Functions
// -------------------------------------
function showMobileNav() {
    $j('#mobile_nav').slideDown();
    $j('#mobile_nav_toggle').addClass('active');
}

function hideMobileNav() {
    $j('#mobile_nav').slideUp('fast');
    $j('#mobile_nav_toggle').removeClass('active');
}

function showSiteSearch() {
    hideMobileNav();
    $j('#site_search').addClass('active');
    var $searchIcon = $j('#search_icon a');
    $searchIcon.removeClass('fa-search');
    $searchIcon.addClass('fa-close');
    $j('#search_icon').addClass('active');
    showHeaderAlternate();
}

function hideSiteSearch() {
    $j('#site_search').removeClass('active');
    var $searchIcon = $j('#search_icon a');
    $searchIcon.removeClass('fa-close');
    $searchIcon.addClass('fa-search');
    $j('#search_icon').removeClass('active');
    hideHeaderAlternate();
}

function showHeaderAlternate() {
    $j('#site_header').addClass('alternate');
}

function hideHeaderAlternate() {
    $j('#site_header').removeClass('alternate');
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function(){

    // handle hide/show mobile nav
    $j('#mobile_nav_toggle a').click(function() {
        var $parent = $j(this).parent();
        if( $parent.hasClass('active') ) {
            hideMobileNav();
        }
        else {
            hideSiteSearch();
            showMobileNav();
        }
        return false;
    });

    // handle hide show site search
    $j('#search_icon a').click(function() {
       var $parent = $j(this).parent();
        if ( $parent.hasClass('active') ){
            hideSiteSearch();
        }
        else {
            showSiteSearch();
        }
        return false;
    });

}); // end document ready