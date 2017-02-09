$(function() {
    var maxHeight = 0;
    $(".product-content").each(function(){
       if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });
    $(".product-content").height(maxHeight);
});