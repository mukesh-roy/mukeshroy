$(document).ready(function () {
    $(document).foundation();
    $('.category-section > .large-3').on('mouseenter', function () {
        $(this).children('.light-bg').stop().slideDown('slow');
        $(this).children('.cat-pics').stop().css({transform: 'translateY(-40%) rotateZ(0deg)'});
        $(this).children('.cat-ingredients').stop().slideDown('slow');
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

    var newvar = document.URL.split("?")[1];
    if (newvar) {
        $('.cat-filter').children('li').children('.' + newvar).click();
    }

    if ($('.experience-count').length) {
        var experience_counter = 1, i;
        var interval = setInterval(function () {
            $('.experience-count').html(experience_counter + " years");
            experience_counter++;
            if (experience_counter > 7) {
                $('.experience-count').html(experience_counter - 1 + " years [still counting...]");
                clearInterval(interval);
            }
        }, 1000);
    }
    if ($('#portfolio-container').length) {
        $('.cat-details > a').on('click', function () {
            var self =$(this),ptrSlider = 0,TrackOnSlider = $('#portfolioContainerTrackon'),
                revealBgOn = $('.reveal-modal-bg').css('display');
            if(TrackOnSlider.val()==0){
                $.ajax({
                    url: 'portfolio-slider.php',
                    success:function(ptrSlider) {
                        ptrSlider = $(ptrSlider).appendTo($('#portfolio-container'));
                        $('#portfolio-container').find('ul').foundation({ orbit: {
                            animation: 'slide',
                            pause_on_hover: true,
                            animation_speed: 500,
                            navigation_arrows: true,
                            bullets: false}
                        });
                        self.click();
                    }
                });
                TrackOnSlider.val(1);
            }
            $('#portfolio-container').foundation('reveal', 'open');
        });
    }

    $('.page-scroll a').on('click', function (event) {
        var $anchor = $(this).attr('href'), TopLog = '';
        if ($anchor == 'javascript:void(0);') {
            return;
        }
        if ($($anchor).length) {
            TopLog = $($anchor).position().top;
            $('html, body').stop().animate({
                scrollTop: TopLog
            }, 1500);
            event.preventDefault();
        }
    });

});