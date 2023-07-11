<?php include_once 'header.php'; ?>
    <!--
    // first step to create accordion is to understand the requirements

    // Must have a title and description on any event

    // we need to create view first
    // polish it with CSS
    //if accordion active then accordion details will be shown

    // Then move to jQuery
    -->
    <div class="row">
        <div class="large-12 column">
            <fieldset>
                <legend>Preview</legend>
                <div class="accordion">
                    <div class="accordion-title">Demo 1</div>
                    <div class="accordion-details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?
                    </div>
                    <div class="accordion-title">Demo 2</div>
                    <div class="accordion-details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?
                    </div>
                    <div class="accordion-title">Demo 3</div>
                    <div class="accordion-details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?
                    </div>


                </div>
            </fieldset>

        </div>
        <div class="large-12 column">
            <fieldset>
                <legend>jQuery</legend>
                <code>
               <pre> $('.accordion > .accordion-title').on('click', function () {
                     $(this).parent('.accordion').children('.accordion-details').slideUp('fast');
                     $(this).next('.accordion-details').slideDown('fast');
                     return false;
                })</pre>
                </code>
            </fieldset>
        </div>

    </div>

    <div class="row">
        <div class="column large-12">
            <p>HTML part:</p>
            <ul>
                <li> - Inside a `div` element with the class "row" and a `div` element with the class "large-12 column", we have a fieldset with a legend that says "Preview".</li>
                <li>- Within the fieldset, there is a container with the class "accordion".</li>
                <li>- Inside the accordion container, we have multiple sections of content. Each section consists of a div element with the class "accordion-title" and a div element with the class "accordion-details".
                <li>- The accordion-title divs contain the titles or headings for each section, such as "Demo 1", "Demo 2", and "Demo 3".</li>
                <li>- The accordion-details divs contain the corresponding details or content for each section.</li>
            </ul>

            JavaScript (jQuery) part:
            <ul>
                <li>- Inside another `div` element with the class "large-12 column", we have another fieldset with a legend that says "jQuery".</li>
                <li>- Inside the fieldset, we have a code block wrapped in a code tag.</li>
                <li>- The jQuery code is as follows:</li>
            </ul>

            <code>
                <pre>
                    $('.accordion > .accordion-title').on('click', function () {
                    $(this).parent('.accordion').children('.accordion-details').slideUp('fast');
                    $(this).next('.accordion-details').slideDown('fast');
                    return false;
                    })
                </pre>
            </code>

            <ul>
                <li>- This code attaches a click event handler to elements with the class "accordion-title" that are direct children of elements with the class "accordion".</li>
                <li>- When an accordion-title element is clicked, it triggers the following actions:</li>
                <li>- It selects the parent element with the class "accordion" and finds its children with the class "accordion-details". It then slides up (hides) those elements quickly.</li>
                <li>- It selects the next sibling element with the class "accordion-details" and slides it down (shows it) quickly.</li>
                <li>- Finally, `return false;` prevents any default click behavior, such as navigating to a link.</li>
            </ul>

            <p>In summary, the HTML code sets up a basic structure for an accordion with sections of content. The jQuery code adds interactivity to the accordion, allowing users to click on the titles to expand or collapse the corresponding details.</p>
        </div>
    </div>
<?php include_once 'footer.php'; ?>