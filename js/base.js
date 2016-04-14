// -------------------------------------
// Mobile Nav Funcitons
// -------------------------------------
function showMobileNav() {
    $j('#mobile_nav').slideDown();
    $j('#mobile_nav_toggle').addClass('active');
}

function hideMobileNav() {
    $j('#mobile_nav').slideUp('fast');
    $j('#mobile_nav_toggle').removeClass('active');
    $j('#mobile_nav_items .nav_lvl_1').each(function() {
        $j(this).children('a.active').each(function() {
            hideMobileSubnav($j(this));
        })
    });
}

function showMobileSubnav(parent) {
    parent.addClass('active');
    parent.next().slideDown();
}

function hideMobileSubnav(parent) {
    parent.removeClass('active');
    parent.next().slideUp('fast');
}


// -------------------------------------
// Main Nav Functions
// -------------------------------------

function showMainNavSubmenu() {
    $j('#main_nav_items li.nav_lvl_1').hoverIntent({
        over: function() {
            jQuery(this).find('.nav_lvl_2').slideDown(200);
        },
        out: function() {
            jQuery(this).find('.nav_lvl_2').slideUp(50);
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
// Site Search Funcitons
// -------------------------------------

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


// -------------------------------------
// Global Utility Functions
// -------------------------------------

function setupOptionListGrid(list) {
    list.each(function() {
        var optionItems = $j(this).children();
        var numOptions = optionItems.length;
        if(numOptions > 5) {
            optionItems.addClass('grid');
        }
    });
}

function countCalloutCategories() {
    $j('.nav_lvl_2').each(function() {
        var $this = $j(this);
        var calloutList = $this.children('.callout_categories');
        var listItems = calloutList.find('ul > li');
        var numItems = listItems.length;
        listItems.addClass('length_' + numItems);
    });
}

function scrollToAnchor(anchorID) {
    var anchorID = $j("a[name='" + anchorID + "']");
    $j('html,body').animate({scrollTop: anchorID.offset().top}, 'slow');
}

function scrollArrowSetup() {
    if($j('#scroll_arrow').length && $j('a[name=page_jump]').length) {
        var $scrollArrow = $j('#scroll_arrow');
        setTimeout(function() {
            $scrollArrow.addClass('active');
        }, 1000);
        $scrollArrow.click(function() {
            scrollToAnchor('page_jump');
            hideScrollArrow();
        });
        var pageJumpPosition = $j('a[name=page_jump]').offset().top;
        $j(window).scroll($j.throttle( 500, function() {
            if($j(window).scrollTop() >= pageJumpPosition) {
               hideScrollArrow();
            }
        }));
    }
}

function hideScrollArrow() {
    $j('#scroll_arrow').removeClass('active');
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

    // hide/show mobile subnav items
    $j('#mobile_nav_items .nav_lvl_1 > a').click(function() {
        var $this = $j(this);
        if($this.hasClass('active')) {
            hideMobileSubnav($this);
        }
        else {
            showMobileSubnav($this);
        }
        return false;
    });

    // count callout nav callout categories
    countCalloutCategories();

    // hide/show site search
    $j('#search_link a').click(function() {
        var $parent = $j(this).parent();
        if($parent.hasClass('active')) {
            hideSiteSearch();
        }
        else {
            $parent.removeClass('active');
            showSiteSearch();
        }
        return false;
    });

    // show main nav submenu
    showMainNavSubmenu();

    // setup scroll arrow
    scrollArrowSetup();

}); // end document ready