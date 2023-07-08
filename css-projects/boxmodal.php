<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            The box model properties width, height, margin, padding and border describe the form of any box on the web.
            But the default sizing model makes life difficult when working out the computed width and height of an element.<br><br>

            Instead, setting box-sizing:border-box allows the computed width and height to equal the values of the width
            and height properties and padding and border are added to the inside.
        </p>

<p class="text-justify">
    <strong>Calculating Dimensions</strong><br><br>
    By default, the computed width of a box is calculated from the sum of it’s width, horizontal padding and horizontal border.
    The computed height is the sum of the height and vertical padding and borders.
    The margin applies spacing around the outside of the box but doesn’t add to the computed width or height.<br><br>
    We can make the value of width - the width property - equal the computed width by using a different sizing model for our boxes.<br><br>

    Using the box-sizing property with the value of border-box gives us a much more intuitive box model. This property is still prefixed in recent versions of Firefox so needs the -moz vendor prefix.
    <br><br>
    Now, when we create a box with a certain width, the padding and borders are added to the inside, meaning no more fiddly calculations are needed.<br><br>

    Before the box-sizing property was added to CSS, this sizing model was actually used by old versions of IE when it entered “quirks mode”. Now we can use this sizing model intentionally in all modern browsers and IE8 and up.
</p>
        <h6>Browser Support</h6>
        <ul>
            <li> All modern browsers and IE8+.</li>
            <li> Recent versions of FF need a -moz prefix.</li>
        </ul>
        <pre>
            <code>
                * {
                -moz-box-sizing:border-box;
                box-sizing:border-box;
                }

            </code>
        </pre>
    </div>
</div>
<?php require_once 'footer.php'; ?>
