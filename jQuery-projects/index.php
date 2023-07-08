<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            jQuery is a library that makes it easier to work with websites. It helps developers write code to select and manipulate elements on a webpage, handle events like clicks and scrolls, and create animations. jQuery simplifies common tasks, so developers don't have to write as much code from scratch. It's been around for a long time and is used by many developers to make websites more interactive and user-friendly.
        </p>
        <ul class="circle TTogle">
            <?php require 'js-list.php'; ?>
        </ul>
        <script>
            // Get the parent element with class "TTogle"
            const parentElement = document.querySelector('.TTogle');

            // Get all anchor tags within the parent element
            const anchorTags = parentElement.getElementsByTagName('a');

            // Attach click event listener to each anchor tag
            Array.from(anchorTags).forEach(function(anchorTag) {
                anchorTag.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default anchor behavior

                    const hiddenContent = this.nextElementSibling;
                    if (hiddenContent) {
                        hiddenContent.classList.toggle('hide');
                    }
                    return false;
                });
            });

        </script>
    </div>
</div>
<?php require_once 'footer.php'; ?>
