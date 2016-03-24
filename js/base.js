// -------------------------------------
// Functions
// -------------------------------------
function showMobileNav() {
    showHeaderAlternateShadow();
    $j('#mobile_nav').slideDown();
    $j('#mobile_nav_toggle').addClass('active');
}

function hideMobileNav() {
    $j('#mobile_nav').slideUp('fast', hideHeaderAlternateShadow);
    $j('#mobile_nav_toggle').removeClass('active');
}

function showSiteSearch() {
    hideMobileNav();
    showHeaderAlternateShadow();
    var $searchIcon = $j('#search_icon a');
    $searchIcon.removeClass('fa-search');
    $searchIcon.addClass('fa-close');
    $j('#search_icon').addClass('active');
    $j('#site_search').addClass('active');
    $j('#site_search input').focus();
}

function hideSiteSearch() {
    hideHeaderAlternateShadow();
    $j('#site_search').removeClass('active');
    $j('#search_icon').removeClass('active');
    var $searchIcon = $j('#search_icon a');
    $searchIcon.removeClass('fa-close');
    $searchIcon.addClass('fa-search');
}

function showHeaderAlternateShadow() {
    $j('#site_header').addClass('alternate');
}

function hideHeaderAlternateShadow() {
    $j('#site_header').removeClass('alternate');
}

function showMainNavSubmenu() {
    $j('#main_nav_items li.nav_lvl_1').hoverIntent({
        over: function(){
            jQuery(this).find('ul.nav_lvl_2').slideDown(200);
        },
        out: function(){
            jQuery(this).find('ul.nav_lvl_2').slideUp(50);
        },
        timeout: 300
    });
    $j('#main_nav_items .nav_lvl_2').hover(
        function() {
            $j(this).addClass('active');
            $j(this).prev().addClass('active')
        },
        function() {
            $j(this).removeClass('active');
            $j(this).prev().removeClass('active')
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