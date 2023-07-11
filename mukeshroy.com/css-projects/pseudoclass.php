<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            A CSS pseudo-class is a keyword added to selectors that specifies a special state of the element to be
            selected.
            For example :hover will apply a style when the user hovers over the element specified by the
            selector.<br><br>

            Pseudo-classes, together with pseudo-elements, let you apply a style to an element not only in relation to
            the content of the document tree, but also in relation to
            external factors like the history of the navigator (:visited, for example), the status of its content (like
            :checked on some form elements),
            or the position of the mouse (like :hover which lets you know if the mouse is over an element or not).
            <br><br> For Example:-</p>
    </div>
    <div class="large-6 column lblca">
        <fieldset>
            <legend>Preview</legend>
            <div class="pseudo-section">
                <p class="text-justify">
                    Pseudo elements are elements on the page that aren't found in the HTML code.
                    They can be manipulated with any CSS that would be applied to any other element.
                    Two special pseudo elements - `:before` and `:after` can be used to generate content on the page
                    from CSS and have many potential use cases
                </p>

                <div class="large-12 column">
                    <h5 class="">heading</h5>
                    <ul class="no-bullet">
                        <li>list</li>
                        <li>list</li>
                    </ul>
                    <h5>heading</h5>
                    <ul class="no-bullet">
                        <li>list</li>
                        <li>list</li>
                    </ul>
                    <h5>heading</h5>
                    <ul class="no-bullet">
                        <li>list</li>
                        <li>list</li>
                    </ul>
                </div>

            </div>
        </fieldset>
    </div>
    <div class="large-6 column">
        <fieldset class="lblca">
            <legend>SCSS Code</legend>
        <pre>
            <code>
.pseudo-section {
    position: relative;
    border-left: solid 15px $success-color;
    padding: 1em 1em 1em 3em;

    &amp;:before, &amp;:after {
        color: $success-color;
        position: absolute;
        font-size: 100px;
        font-family: Georgia;
    }

    &amp;:before {
        top: -.2em;
        left: 0;
    }
    &amp;:after,&amp;:before {
        content: '"';
        bottom: -.6em;
        right: 0;
    }

    &amp; p {
    &amp;::selection, &amp;::-moz-selection {
        background-color: $success-color !important;
        color: white !important;
    }

    &amp;:first-line {
        color: $success-color;
    }
    &amp;:first-letter {
        color: $success-color;
        float: left;
        font-size: 100px;
        font-weight: bold;
        margin-right: 0.1em;
    }

    }
    &amp; h5 {
        counter-increment: heading;
            &amp;::before {
                content: counter(heading) ". ";
            }
    }
    &amp; ul {
        counter-reset: item;
        &amp; li {
            counter-increment: item;
            &amp;:before {
            content: counter(heading) ". " counter(item) " ";
            }
        }
    }
}
            </code>
            </pre>
        </fieldset>
    </div>
</div>
<?php require_once 'footer.php'; ?>
