$(document).ready(function(){
    // enable iScroll for list table
    var listTable = new IScroll('.list-table-wrapper', {
        scrollX: true,
        scrollY: false,
        mouseWheel: false,
        scrollbars: true
    });
    $(document).on('touchmove', function(e) { e.preventDefault(); }, false);
});
