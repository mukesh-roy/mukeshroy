<?php include_once 'header.php'; ?>
    <div class="row">
        <div class="large-12 column">
            <ul>
                <li><a href="javascript:void(0);" class="hide-show-test">Click to show/hide : [toggle]</a></li>
            </ul>
            <div class="firsElement hide">
                <p>111111111111.</p>
                <p>you can study everything you need to learn, in an accessible and handy format.</p>
            </div>

            <p>To achieve this functionality, we will use jQuery, which is a JavaScript library. jQuery makes it easier to work with HTML elements and perform actions on them.</p>

            <p>Here's what the code does:</p>

            <ol>
                <li> We have a list item with a link that has a class called "hide-show-test". This link is the one we will click to show or hide the content.</li>
                <li> The div element has a class called "firsElement". Initially, we want to hide this div, so it has an additional class called "hide".</li>
                <li> Inside the div, we have some paragraphs with text.</li>
            </ol>

            <p>To implement the show/hide toggle functionality, we can use the following jQuery code:</p>


            <code>
               <pre>
                   $(document).ready(function() {
                       $(".hide-show-test").click(function() {
                       $(".firsElement").toggle();
                       });
                   });
               </pre>
            </code>

            <ol>
                <li>- `$(document).ready(function() { ... });` ensures that the JavaScript code is executed after the HTML document has finished loading. It's a best practice to wrap jQuery code in this function.</li>
                <li>- `$(".hide-show-test").click(function() { ... });` selects the element with the class "hide-show-test" and attaches a click event handler to it. This means that when we click on that element, the code inside the function will be executed.</li>
                <li>- `$(".firsElement").toggle();` selects the element with the class "firsElement" and toggles its visibility. In other words, it will show the element if it's currently hidden, or hide it if it's currently visible.</li>
            </ol>
            <p>So, when we click on the link with the class "hide-show-test", the code will find the element with the class "firsElement" and toggle its visibility. This way, the content inside the div will be shown if it's hidden or hidden if it's shown.</p>
        </div>
    </div>

<?php include_once 'footer.php'; ?>