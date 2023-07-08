<?php include_once 'header.php'; ?>
<style text="text/css">

    .animationwrapper {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .animationwrapper ul {
        position: relative;
        width: 100%;
    }

    .animationwrapper li {
        display: inline;
        float: left;
        list-style: none;
    }

    .dot {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 20px;
        z-index:999;
    }

    .dots li {
        width: 10px;
        height: 10px;
        margin: 0 4px;
        border: 2px solid #000;
        border-radius: 6px;
        cursor: pointer;
        opacity: .4;
    }

    .dots li.active {
        background: #fff;
        opacity: 1;
    }
</style>
<div class="row">
    <div class="large-12 column">
        <a href="javascript:void(0);" class="unslider-arrow prev">Previous slide</a>
        <a href="javascript:void(0);" class="unslider-arrow next">Next slide</a>

        <div class="animationwrapper">
            <ul class="no-bullet">
                <li class="1"><img src="http://placehold.it/970x400&text=1"></li>
                <li class="2"><img src="http://placehold.it/970x400&text=2"></li>
            </ul>

        </div>
    </div>
    <div class="large-12 column">
        <p>The HTML part:</p>

        <ul>
            <li>- Inside a `div` element with the class "row" and a `div` element with the classes "large-12 column", we have two links for previous and next slides.</li>
            <li>    - The links have the class "unslider-arrow" and are set to `javascript:void(0);` for their `href` attribute. This means that clicking on the links won't navigate to a new page.</li>
            <li>- Inside the `div` with the class "animationwrapper", there is an unordered list (`ul`) with the class "no-bullet". Each list item (`li`) contains an image with a placeholder source.</li>
        </ul>

        <p>The JavaScript part:</p>
        <code>
            <pre>
                var unslider = $('.animationwrapper').mkslider({dots: true,fluid:true});

                    $('.unslider-arrow').click(function () {
                    var fn = this.className.split(' ')[1];
                    unslider.data('mkslider')[fn]();
                });
            </pre>
        </code>
        <ul>
            <li>- The script initializes a slideshow using the `.mkslider()` function from a library (presumably "mkslider"). It selects the element with the class "animationwrapper" and assigns the initialized slideshow to the variable `unslider`. It also enables the dots navigation and allows the slideshow to adjust its size fluidly.</li>
            <li>- The `$('.unslider-arrow').click(function () { ... })` code attaches a click event handler to the elements with the class "unslider-arrow". When clicked, it extracts the second class name from the clicked element and uses it to determine whether to go to the previous or next slide. It calls the corresponding function on the `unslider` variable, provided by the mkslider library.</li>

        </ul>
        <p>In simpler terms, this code sets up a slideshow with navigation arrows. When you click the "Previous slide" or "Next slide" links, the script will move to the previous or next slide respectively. The slideshow is initialized and controlled using the mkslider library, which handles the slide transitions and provides the necessary functionality.</p>
    </div>
</div>

<?php include_once 'footer.php'; ?>
<script>
    var unslider = $('.animationwrapper').mkslider({dots: true,fluid:true});

    $('.unslider-arrow').click(function () {
        var fn = this.className.split(' ')[1];
        unslider.data('mkslider')[fn]();
    });

</script>