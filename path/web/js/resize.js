var normWidth = $('#news-carousel').width();
var normHeight = $('#news-carousel').height();

$('.carousel-img').each(function () {
    $(this).css("width", normWidth);
    $(this).css("height", normHeight);
});
