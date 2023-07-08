<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            ID is a CSS selector that allows the styling of a single unique element. That's why I prefer the 'class'
            selector over 'ID'
        </p>
            <pre>
                #id-name {
                    property:value;
                }

            </pre>


        <h6>I'll outline two key reasons why I avoid using the ID selector in CSS:</h6>

        <dl>
            <dt>They are single use</dt>
            <dd>In this case we can't think about re-usability</dd>
            <dt>They introduce specificity issues</dt>
            <dd>When we are writing CSS, things that come further down the stylesheet tend to override thing that have
                been declared above them, but in that case this is not working because id select is more powerful.
            </dd>
        </dl>

    </div>
</div>
<?php require_once 'footer.php'; ?>
