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
    showHeaderAlternate();
    var $searchIcon = $j('#search_icon a');
    $searchIcon.removeClass('fa-search');
    $searchIcon.addClass('fa-close');
    $j('#search_icon').addClass('active');
    $j('#site_search').addClass('active');
    $j('#site_search input').focus();
}

function hideSiteSearch() {
    hideHeaderAlternate();
    $j('#site_search').removeClass('active');
    $j('#search_icon').removeClass('active');
    var $searchIcon = $j('#search_icon a');
    $searchIcon.removeClass('fa-close');
    $searchIcon.addClass('fa-search');
}

function showHeaderAlternate() {
    $j('#site_header').addClass('alternate');
}

function hideHeaderAlternate() {
    $j('#site_header').removeClass('alternate');
}

function showMainNavSubmenu() {
    $j('#main_nav_items a.parent').hoverIntent(
        function() {
            $j(this).next().slideDown();
        },
        function() {
            $j(this).next().hide();
        }
    );
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function(){

    //  hide/show mobile nav
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

    // hide/show site search
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

    // show main nav submenu
    showMainNavSubmenu();

}); // end document ready