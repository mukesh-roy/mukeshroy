$(document).foundation();

$('#grab-goodies').foundation('reveal', 'open');

$('.home-product-section > .column').on('mouseenter', function () {
    var cols=$('.home-product-section > .column');
    cols.children('.home-prd-overlay').slideUp('fast');
    $(this).children('.home-prd-overlay').stop().slideDown('fast');
    //cols.show( explode, size, 500);
});
$('.home-product-section > .column').on('mouseleave', function () {
    var cols=$('.home-product-section > .column');
    cols.children('.home-prd-overlay').stop().slideUp('fast');
});
$('.home-product-section > .column').on('click', function () {
    var GrabLinks=$(this).children('a').attr('href');
    //location.href=GrabLinks;
});
$('.store-search > .column > input').on('focusin', function () {
    $('.icon-search').addClass('active');
    $('.icon-search').parent('.postfix').addClass('active');
});
$('.store-search > .column > input').on('focusout', function () {
    $('.icon-search').removeClass('active');
    $('.icon-search').parent('.postfix').removeClass('active');
});