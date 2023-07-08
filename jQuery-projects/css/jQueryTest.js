/**
 * Created by mukeshroy on 18/9/14.
 */
$(document).ready()
{
    $('.hide-show-test').on('click', function () {
        $('.firsElement').toggle();
    })

    $('.nextAnim').on('click', function () {
        nextAnimation();
    })

    $('.backAnim').on('click', function () {
        backAnimation();
    })

    var element = $('.animationwrapper').children('ul').children('li'),
        totalElement = element.length,
        wraperWidth = totalElement * 100 + '%';
    $('.animationwrapper > ul').css('width', wraperWidth);

    function nextAnimation() {
        $('.animationwrapper').children('ul').animate({left: '-=' + element.width()})
        var listWrapper = $('.animationwrapper').children('ul');
        listWrapper.children('li:first-child').remove().clone().appendTo(listWrapper);
        $('.animationwrapper').children('ul').animate({left: '+=' + element.width()})
        //listWrapper.children('li:first-child').remove()

        //$('.animationwrapper').children('ul').append(firstElement).animate({left:0})
    }

    function backAnimation() {
        $('.animationwrapper').children('ul').stop().animate({left: '+=' + element.width()})
    }


    /*
     * $(selector).on('event[click,mouseover,mouseenter,mouseleave...]',function({
     *
     * }))
     *
     * */

    $('.accordion > .accordion-title').on('click', function () {
        var closeDetails = $(this).parent('.accordion').children('.accordion-details');
        closeDetails.slideUp('fast');
        $(this).next('.accordion-details').slideDown('fast');
        return false;
    })

    // Example 1: Handling click event
    $('#clickButton').click(function() {
        console.log('Button clicked!');
    });

    // Example 2: Handling hover event
    $('#hoverElement').mouseenter(function() {
        console.log('Element hovered!');
    });

    // Example 3: Event delegation for dynamic content
    $('#parent').on('click', '.child', function() {
        console.log('Child element clicked!');
    });

    // Example 4: Handling form submission
    $('#myForm').submit(function(event) {
        event.preventDefault();
        const name = $('#nameInput').val();
        if (name) {
            console.log('Form submitted with name: ' + name);
        }
    });
}