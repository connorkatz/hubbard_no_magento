// -------------------------------------
// Mobile Nav Funcitons
// -------------------------------------
function showMobileNav() {
    $j('#mobile_nav').fadeIn(100);
    $j('#mobile_nav_toggle').addClass('active');
}

function hideMobileNav() {
    $j('#mobile_nav').fadeOut(50);
    $j('#mobile_nav_toggle').removeClass('active');
    $j('#mobile_nav_items .nav_lvl_1').each(function() {
        $j(this).children('a.active').each(function() {
            hideMobileSubnav($j(this));
        })
    });
}

function showMobileSubnav(parent) {
    parent.addClass('active');
    parent.next().slideDown(100);
}

function hideMobileSubnav(parent) {
    parent.removeClass('active');
    parent.next().slideUp(100);
}


// -------------------------------------
// Main Nav Functions
// -------------------------------------

function showMainSubnav(parent) {
    hideMainSubnav();
    parent.addClass('active');
    parent.children('.nav_lvl_2').fadeIn(100);
}

function hideMainSubnav() {
    var mainNavItems = $j('#main_nav_items li');
    mainNavItems.removeClass('active');
    mainNavItems.find('.nav_lvl_2').fadeOut(50);
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
        $j(window).scroll($j.throttle(500, function() {
            if($j(window).scrollTop() >= pageJumpPosition) {
                hideScrollArrow();
            }
        }));
    }
}

function hideScrollArrow() {
    $j('#scroll_arrow').removeClass('active');
}

function changeTab(target, tabNav, tabGroup) {
    tabNav.removeClass('active');
    tabGroup.removeClass('active');
    tabNav.filter('[href=' + target + ']').addClass('active');
    $j(target).addClass('active');
};

function setupFeatureDetails(linkElement) {
    if($j('#feature_block_features').length) {
        var featureItemLinks = $j('#feature_items_block a');
        var $this = linkElement;
        var linkPosition = $this.position();
        var linkPositionTop = linkPosition.top;
        var linkPositionLeft = linkPosition.left;
        var linkTitle = $this.attr('href');
        featureItemLinks.removeClass('active');
        $this.addClass('active');
        $j('.fd_item').removeClass('active');
        if($j(window).width() >= 700) {
            switch(linkTitle) {
                case '#fd_heel':
                    linkPositionTop += 48;
                    linkPositionLeft -= 6;
                    break;
                case '#fd_tongue':
                    linkPositionTop += 50;
                    linkPositionLeft -= 32;
                    break;
                case '#fd_sole':
                    linkPositionTop -= 125;
                    linkPositionLeft -= 105;
                    break;
                case '#fd_shank':
                    linkPositionTop -= 85;
                    linkPositionLeft -= 25;
                    break;
            }
            $j(linkTitle).css({top: linkPositionTop, left: linkPositionLeft});
        }
        if($j(window).width() >= 1150) {
            switch(linkTitle) {
                case '#fd_heel':
                    linkPositionTop += 75;
                    linkPositionLeft +=10;
                    break;
                case '#fd_tongue':
                    linkPositionTop += 70;
                    linkPositionLeft += 8;
                    break;
                case '#fd_sole':
                    linkPositionTop += 50;
                    linkPositionLeft += 10;
                    break;
                case '#fd_shank':
                    linkPositionTop += 50;
                    linkPositionLeft += 8;
                    break;
            }
            $j(linkTitle).css({top: linkPositionTop, left: linkPositionLeft});
        }
        $j(linkTitle).addClass('active');
    }
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
    $j('#main_nav_items .nav_lvl_1 > a').click(function() {
        var $parent = $j(this).parent();
        if($parent.hasClass('active')) {
            hideMainSubnav();
        }
        else {
            showMainSubnav($parent);
        }
        return false;
    });

    // setup scroll arrow
    scrollArrowSetup();

    setupFeatureDetails($j('#feature_items_block a.active'));

    $j('#feature_items_block a').click(function() {
        setupFeatureDetails($j(this));
        return false;
    });

}); // end document ready