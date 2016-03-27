// -------------------------------------
// Functions
// -------------------------------------
function showOptionItems(optionList) {
    hideOptionItems();
    optionList.prev().addClass('active');
    optionList.slideDown('fast');
}

function hideOptionItems(optionList) {
    if(optionList) {
        optionList.prev().removeClass('active');
        optionList.slideUp('fast');
    }
    else {
       $j('.prod_option_items').slideUp('fast').prev().removeClass('active');
    }
}

function changeOptionText(optionGroup, optionText) {
    optionGroup.children('span').text(optionText);
}

// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {
    
    $j('.prod_option_select span').click(function() {
        var $this = $j(this);
        var optionList = $this.next();
        if($this.hasClass('active')) {
            hideOptionItems(optionList);
        }
        else {
            showOptionItems(optionList);
        }

    });

    $j('.prod_option_items li').click(function() {
        var $this = $j(this);
        var optionGroup = $this.parents('.prod_option_select');
        var optionList = $this.parent();
        var optionText = $this.text();
        optionList.children().removeClass('active');
        $this.addClass('active');
        changeOptionText(optionGroup,optionText);
        hideOptionItems(optionList);
    });

    setupListGrid($j('.prod_option_items'));

}); // end document ready