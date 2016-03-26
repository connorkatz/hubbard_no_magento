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
    var $searchIcon = $j('#search_link i');
    $searchIcon.removeClass('fa-search');
    $searchIcon.addClass('fa-close');
    $j('#search_link').addClass('active');
    $j('#site_search').addClass('active');
    $j('#site_search input').focus();
}

function hideSiteSearch() {
    $j('#site_search').removeClass('active');
    $j('#search_link').removeClass('active');
    var $searchIcon = $j('#search_link i');
    $searchIcon.removeClass('fa-close');
    $searchIcon.addClass('fa-search');
}

function showMainNavSubmenu() {
    $j('#main_nav_items li.nav_lvl_1').hoverIntent({
        over: function() {
            jQuery(this).find('ul.nav_lvl_2').slideDown(200);
        },
        out: function() {
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
$j(document).ready(function() {

    //  hide/show mobile nav
    $j('#mobile_nav_toggle a').click(function() {
        var $parent = $j(this).parent();
        if($parent.hasClass('active')) {
            hideMobileNav();
        }
        else {
            hideSiteSearch();
            showMobileNav();
        }
        return false;
    });

    // hide/show site search
    $j('#search_link a').click(function() {
        var $parent = $j(this).parent();
        if($parent.hasClass('active')) {
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