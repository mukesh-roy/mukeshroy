<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            float can be used to wrap text around an image or create complex, multi-column layouts. When elements float,
            adjacent elements try to wrap around them which can result in slightly odd layouts unless the clear property has also been used where needed.<br><br>
            The float property is most commony used for page layout. However, the original purpose of float was to allow text to wrap
            around an object, something commonly seen in print design.
        </p>

        <h6>The float property accepts 3 values, left, right or none.</h6>

        <pre>
            <code>
                .main-content {
                    float:left;
                    width:60%;
                }
                .sidebar {
                    float:right;
                    width:30%;
                }

            </code>
        </pre>

    </div>
</div>
<?php require_once 'footer.php'; ?>
