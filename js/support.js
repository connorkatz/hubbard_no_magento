
// -------------------------------------
// Document Ready
// -------------------------------------
$j(document).ready(function() {

    $j('#support_topics a').click(function() {
        var anchor = $j(this).attr('href');
        scrollToAnchor(anchor);
        console.log(anchor);
        return false;
    });

}); // end document ready