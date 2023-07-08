$(document).ready(function () {
    $(document).foundation();
    $('.all-course-content > li').mouseenter(function () {
        $('.all-course-content > li').children('ul').addClass('hide');
        $(this).addClass('active').children('ul').removeClass('hide');
    });
    $('.all-course-content > li,.course-list').mouseleave(function () {
        $('.all-course-content > li').removeClass('active').children('ul').addClass('hide');
    })
    $('.drop-down-first-icon').on('click', function () {
        $(this).parent('a').parent('li').removeClass('active');
        $(this).parent('a').siblings('ul').addClass('hide');
    });
    //$('.datepicker,.user_dob').fdatepicker();
    //alert('test')
    $('.js-request-call').on('click', function () {
        $('.request-call-title').toggleClass('active-request-tab');
    });
    $('.js-forgot-form').on('click', function () {
        $('#login-modal').addClass('tiny').removeClass('large');
        $('.login-form,.register-form').addClass('hide');
        $('.forgot-form').removeClass('hide');
    });
    $('.js-login-form').on('click', function () {
        $('#login-modal').addClass('tiny').removeClass('large');
        $('.forgot-form,.register-form').addClass('hide');
        $('.login-form').removeClass('hide');
    });
    $('.js-register-form').on('click', function () {
        $('#login-modal').addClass('large').removeClass('tiny');
        $('.register-form').removeClass('hide');
        $('.login-form,.forgot-form').addClass('hide');
    });

    $('#request-call-back').submit(function () {
        $(this).children('div').addClass('error');
        window.setTimeout(function () {
            $('#request-call-back').children('div').removeClass('error');
        }, 1000);
    });
    $(window).scroll(function () {

        if ($(this).scrollTop() >= 20) {
            $('body').addClass('header-sticky');
        } else {
            $('body').removeClass('header-sticky');
        }

        if ($('.product-page').length != 0) {
            var BreakingPoint = $('#overview').position().top;
            if ($(this).scrollTop() >= BreakingPoint) {
                $('.product-page').addClass('sticky-prd-nav');
            }
            if ($(this).scrollTop() <= BreakingPoint) {
                $('.product-page').removeClass('sticky-prd-nav');
            }
            if ($(this).scrollTop() >= BreakingPoint * 7) {
                $('.product-page').addClass('sticky-with-bottom');
            }
            if ($(this).scrollTop() <= BreakingPoint * 7) {
                $('.product-page').removeClass('sticky-with-bottom');
            }
        }
        if ($('.large-4').hasClass('buy-button') == true) {
            var BreakingPoint = $('#overview').position().top;
            if ($(this).scrollTop() >= BreakingPoint * 2) {
                $('.buy-button').addClass('sticky-button');
            } else {
                $('.buy-button').removeClass('sticky-button');
            }
        }
    });


    $('.tab-list > li > a').on('click', function () {
        $('.tab-list > li > a').removeClass('activeTb');
        $(this).addClass('activeTb');
        $(this).parent('li').parent('.tab-list').siblings('.tabs-details').removeClass('activeTc');
        $(this).parent('li').parent('.tab-list').siblings('#' + $(this).attr('href').substring(1, $(this).attr('href').length)).addClass('activeTc');
        return false
    })

    $('#course-list > li > .large-3').on('mouseenter', function () {
        $('#course-list > li > .large-3').removeClass('active');
        $(this).addClass('active');
    });
    $('#course-list > li > .large-3').on('mouseleave', function () {
        $(this).removeClass('active');
    });
    $('#course-list').on('mouseleave', function () {
        $(this).siblings('.orbit-timer').click();
    });
    $('.facebook,.linkdin,.twiter,.gplus,.atp,.rep,.ato').on('mouseenter', function () {
        $(this).removeClass('grayscale-recover');
    });
    $('.facebook,.linkdin,.twiter,.gplus,.atp,.rep,.ato').on('mouseleave', function () {
        $(this).addClass('grayscale-recover');
    });
    $('.zone-section').on('mouseenter', function () {
        $(this).children('.zone-icon').children('.learning-zone,.fun-zone,.workshop-zone').removeClass('grayscale-recover');
    });
    $('.zone-section').on('mouseleave', function () {
        $(this).children('.zone-icon').children('.learning-zone,.fun-zone,.workshop-zone').addClass('grayscale-recover');
    });

    $('.category-section > .large-3').on('mouseenter', function () {
        $(this).children('.light-bg').stop().slideDown('slow');
        $(this).children('.cat-pics').stop().css({transform: 'translateY(-40%) rotateZ(0deg)'});
        $(this).children('.cat-ingredients').stop().slideDown('fast');
    });
    $('.category-section > .large-3').on('mouseleave', function () {
        $(this).children('.light-bg').stop().slideUp('fast');
        $(this).children('.cat-pics').stop().removeAttr('style');
        $(this).children('.cat-ingredients').stop().slideUp('fast');
    });
    $('.cat-filter-ui').on('click', function () {
        $(this).toggleClass('expanded');
    });
    $('.cat-filter > li').on('click', function () {
        var relationCatPd = $(this).children('a').attr('class'), selectedList = $(this).children('a').text();
        $(this).parent('.cat-filter').siblings('.selected-filtered').text(selectedList);
        $('.cat-filter > li').removeClass('active');
        $(this).addClass('active');
        if (relationCatPd == 'all') {
            $('.category-section').children('.large-3').fadeIn(200);
        } else {
            $('.category-section').children('.large-3').hide();
            $('.category-section').children('.' + relationCatPd).fadeIn(200);
        }

    });
    if ($('.js-side-nav').length != 0) {
        $('.js-side-nav > li > a').on('click', function () {
            var TrackPosition = $($(this).attr('href')).position().top + 150;
            $('.side-nav > li > a').removeClass('active');
            $(this).addClass('active');
            $("html, body").animate({scrollTop: TrackPosition}, 700);
            return false;
        })
    }
    if ($('.location-country').length != 0) {
        $('.location-country > li > a').on('click', function () {
            var TrackPosition = $($(this).attr('href')).position().top-100;
            $("html, body").animate({scrollTop: TrackPosition}, 700);
            return false;
        })
    }
    $('.js-user-profile').on('click', function () {
        $('.profile-snapshot').slideToggle('fast');
    });


    /*CART PAGE JS*/

    $('.cart-row').on('mouseenter', function () {
        $('.cart-row').removeClass('sober-light-bg');
        $('.cart-row').children('.large-1').children('.cart-controller').children('.item-remove ').addClass('remove').removeClass('remove-open');
        $(this).children('.large-1').children('.cart-controller').children('.item-remove ').addClass('remove-open').removeClass('remove');
        $(this).addClass('sober-light-bg');
    });
    $('.cart-row').on('mouseleave', function () {
        $('.cart-row').children('.large-1').children('.cart-controller').children('.item-remove').addClass('remove').removeClass('remove-open');
        $('.cart-row').removeClass('sober-light-bg');
    });
    $('.cart-controller > .item-remove').on('click', function () {
        if ($('.cart-row').length <= 2) {
            alert('Are you sure, you want to empty your cart');
            window.location.replace("/index.php");
        }
        //var total = $(this).parent('.cart-controller').parent('.large-1').siblings('.column').children('.row').children('.column').children('input.unit-price').val();
        //$('.final-cart-amount').val($('.final-cart-amount').val() - total);
        $(this).parent('.cart-controller').parent('.large-1').parent('.cart-row').remove();
        //$('.TotalNoItem').text(parseInt($('.TotalNoItem').text()) - parseInt($(this).parent('.cart-controller').siblings('.column').children('.row').children('.column').children('input.quantity').val()));
        var productRemoveFromCartId = $(this).parent('.cart-controller').parent('.large-1').siblings('.large-6').children('input').val();
        sendRequestWithData('../helper/removeproductFromCart.php', productRemoveFromCartId);
    });
    /* $('.cart-controller > .edit').on('click',function(){
     $(this).addClass('hide').siblings('.js-update').removeClass('hide');
     $(this).parent('.cart-controller').siblings('.column').children('.row').children('.column').children('input.quantity').removeAttr('disabled');
     });
     $('.cart-controller > .js-update').on('click',function(){
     var relativeInput =$(this).parent('.cart-controller').siblings('.column').children('.row').children('.column'),
     quantity = relativeInput.children('input.quantity').val(),
     unitPrice = relativeInput.children('input.unit-price').val(),
     total = quantity*unitPrice,sumOfTotal = 0,sumOfQuantity=0;
     $(this).addClass('hide').siblings('.edit').removeClass('hide');
     relativeInput.children('input.quantity').attr('disabled','disabled');
     relativeInput.children('input.total').val(total);
     $( 'input.total' ).each( function( i , e ) {
     var v = parseInt( $( e ).val() );
     if ( !isNaN( v ) )
     sumOfTotal += v;
     } );
     $( 'input.quantity' ).each( function( i , e ) {
     var v = parseInt( $( e ).val() );
     if ( !isNaN( v ) )
     sumOfQuantity += v;
     } );
     $('.final-cart-amount').val(sumOfTotal);

     $('.TotalNoItem').text(sumOfQuantity);
     });*/
    $('.coupon-apply').on('click', function () {
        var sumOfTotal = $('.final-cart-amount').val(), couponCodeAmount = $('.coupon-code-amount').val();
        $('.final-cart-amount').val(sumOfTotal - couponCodeAmount);
        $('.coupon-code-amount').val(0)
        if (couponCodeAmount == 0) {
            alert('The Coupon Code is already used in this cart');
        }
    });


    /*Checkout page*/
    $('.payment-method > li > a').on('click', function () {
        $('.payment-method > li > a').removeClass('active');
        $(this).addClass('active');
        $('.checkout-page-content').removeAttr('style').addClass('hide');
        $($(this).attr('href')).slideDown('fast');
        return false;
    });

    if ($('embed').length != 0) {
        $('embed').attr("wmode", "transparent").addClass('video-player').removeAttr('width').removeAttr('height');
    }

    /*faq-accordion*/
    if ($('.faq-accordion').length != 0) {
        $('.faq-accordion > dt').on('click', function () {
            $('.faq-accordion > dt').removeClass('active');
            $('.faq-accordion > dd').slideUp('fast');
            $(this).next('dd').slideDown('fast');
            $(this).addClass('active');
        });
    }

})