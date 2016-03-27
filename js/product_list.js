// -------------------------------------
// Functions
// -------------------------------------
function showFilterList(filterList) {
    $j('.filter_list_items').each(function() {
       hideFilterList($j(this));
    });
    filterList.prev().addClass('active');
    filterList.slideDown();
}

function hideFilterList(filterList) {
    filterList.prev().removeClass('active');
    filterList.slideUp();
}

function changeFilterTitle(selectedItem) {
    var $this = selectedItem;
    var filterList = $this.parent();
    var filterListLinks = filterList.find('li');
    var filterValue = $this.text();
    var filterParent = $this.parents('.filter_item_block');
    var filterLabel = filterParent.find('.filter_label span');
    filterLabel.text(filterValue);
    filterListLinks.removeClass('active');
    $this.addClass('active');
}

function checkFilterReset() {
    var numFilters = 0;
    var onFirstChild = 0;
    $j('.filter_list_items').each(function() {
        numFilters++
        if($j(this).find('li').first().hasClass('active')) {
            onFirstChild++;
        }
    });
    if(numFilters == onFirstChild) {
        hideResetFilters();
    }
    else {
        showResetFilters();
    }
}

function showResetFilters() {
    $j('#reset_filters').show();
}

function hideResetFilters() {
    $j('#reset_filters').hide();
}

function resetAllFilters() {
    $j('.filter_list_items').each(function() {
        var firstItem = $j(this).children().first().children();
        changeFilterTitle(firstItem);
    });
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    // show filter list
    $j('.filter_label').click(function() {
        var $this = $j(this);
        var filterList = $this.next();
        if($this.hasClass('active')) {
            hideFilterList(filterList);
        }
        else {
            showFilterList(filterList);

        }
    });

    // change filter option
    $j('.filter_list_items li').click(function() {
        var $this = $j(this);
        var parentList = $this.parent();
        changeFilterTitle($this);
        hideFilterList(parentList);
        checkFilterReset();
    });

    // reset all filters
    $j('#reset_filters').click(function() {
        resetAllFilters();
        hideResetFilters();
    });

    setupListGrid($j('.filter_list_items'));

}); // end document ready