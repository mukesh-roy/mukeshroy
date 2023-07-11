<?php include_once 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/tip_cards.css">
<div class="row">
    <div class="column large-12">
        <h1>Appendix: jQuery Cheat Sheet</h1>
        <h2>Methods:</h2>
        <ol>
            <li><code>$(selector).addClass(className)</code> - Adds one or more classes to the selected elements.</li>
            <li><code>$(selector).removeClass(className)</code> - Removes one or more classes from the selected elements.</li>
            <li><code>$(selector).toggleClass(className)</code> - Toggles between adding and removing a class from the selected elements.</li>
            <li><code>$(selector).css(propertyName, value)</code> - Sets the CSS property and value for the selected elements.</li>
            <li><code>$(selector).hide()</code> - Hides the selected elements.</li>
            <li><code>$(selector).show()</code> - Shows the selected elements.</li>
            <li><code>$(selector).fadeIn()</code> - Fades in the selected elements.</li>
            <li><code>$(selector).fadeOut()</code> - Fades out the selected elements.</li>
            <li><code>$(selector).append(content)</code> - Appends content to the selected elements.</li>
            <li><code>$(selector).prepend(content)</code> - Prepends content to the selected elements.</li>
            <li><code>$(selector).html(content)</code> - Sets the HTML content of the selected elements.</li>
            <li><code>$(selector).text(content)</code> - Sets the text content of the selected elements.</li>
            <li><code>$(selector).attr(attributeName, value)</code> - Sets or returns the value of an attribute for the selected elements.</li>
            <li><code>$(selector).on(event, handler)</code> - Attaches an event handler function to the selected elements.</li>
            <li><code>$(selector).animate(styles, speed)</code> - Animates the selected elements with specified styles and speed.</li>
        </ol>
        <h2>Selectors:</h2>
        <ol>
            <li><code>$(element)</code> - Selects all elements with the specified HTML tag.</li>
            <li><code>$(#id)</code> - Selects the element with the specified id.</li>
            <li><code>$(.class)</code> - Selects all elements with the specified class.</li>
            <li><code>$(selector1, selector2, selector3)</code> - Selects the union of multiple selectors.</li>
            <li><code>$(parent &gt; child)</code> - Selects all direct child elements specified by "child" that are descendants of elements specified by "parent".</li>
            <li><code>$(selector:first)</code> - Selects the first matched element.</li>
            <li><code>$(selector:last)</code> - Selects the last matched element.</li>
            <li><code>$(selector:even)</code> - Selects even-indexed elements.</li>
            <li><code>$(selector:odd)</code> - Selects odd-indexed elements.</li>
            <li><code>$(selector:not(filter))</code> - Selects all elements that do not match the filter.</li>
        </ol>
        <p>This cheat sheet provides only a glimpse of the numerous jQuery methods and selectors available. It is recommended to refer to the official

            jQuery documentation for detailed information and additional examples.</p>
        <p>Note: The examples provided in this cheat sheet assume the use of the <code>$</code> symbol as the jQuery function alias. However, it is possible to use a different alias if desired.</p>
        <p>Happy coding with jQuery!</p>



        <style>
            .active {
                color: red;
                font-weight: bold;
            }
            .hidden {
                display: none;
            }
        </style>
        <h1>jQuery Examples</h1>

        <h2>Example 1: Adding a class to an element</h2>
        <button id="btn1">Click me</button>


        <h2>Example 2: Hiding an element</h2>
        <p class="alert">This is a notification message.</p>


        <h2>Example 3: Appending content to an element</h2>
        <ul class="container">
            <li>Item 1</li>
            <li>Item 2</li>
        </ul>


        <h2>Example 4: Selecting elements by class</h2>
        <p class="highlight">This is a paragraph with class "highlight".</p>
        <p class="highlight">Another paragraph with class "highlight".</p>


        <h2>Example 5: Selecting the first element</h2>
        <ul>
            <li>First item</li>
            <li>Second item</li>
            <li>Third item</li>
        </ul>



    </div>
</div>

<?php include_once 'footer.php'; ?>
<script>
    $(document).ready(function() {
        $('li:first').addClass('active');
    });
</script>
<script>
    $(document).ready(function() {
        $('.highlight').css('color', 'blue');
    });
</script>
<script>
    $(document).ready(function() {
        $('.container').append('<li>Item 3</li>');
    });
</script>
<script>
    $(document).ready(function() {
        $('.alert').hide();
    });
</script>
<script>
    $(document).ready(function() {
        $('#btn1').click(function() {
            $(this).addClass('active');
        });
    });
</script>