<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            AngularJS extends HTML with new attributes<br>
            AngularJS is perfect for SPAs (Single Page Applications)<br><br>
            AngularJS, commonly referred to as Angular, is an open-source web application framework, maintained by
            Google and the community, that assists with creating single-page applications, which consist of one HTML
            page with CSS and JavaScript on the client side.<br><br>
            AngularJS is a structural framework for dynamic web apps. It lets you use HTML as your template language and
            lets you extend HTML's syntax to express your application's components clearly and succinctly. Angular's
            data binding and dependency injection eliminate much of the code you would otherwise have to write. And it
            all happens within the browser, making it an ideal partner with any server technology.

            Angular is what HTML would have been had it been designed for applications. HTML is a great declarative
            language for static documents. It does not contain much in the way of creating applications, and as a result
            building web applications is an exercise in what do I have to do to trick the browser into doing what I
            want?
        </p>
        <ul class="circle">
            <?php require 'ng-list.php'; ?>
        </ul>
    </div>
</div>
<?php require_once 'footer.php'; ?>
