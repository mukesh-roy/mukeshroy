<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <p class="text-justify">
            AngularJS extends HTML with new attributes<br>
            AngularJS is perfect for SPAs (Single Page Applications)
        </p>

        <h4>Extends HTML</h4>

        <p>AngularJS extends HTML with ng-directives.<br>

            The ng-app directive defines an AngularJS application.<br>

            The ng-model directive binds the value of HTML controls (input, select, textarea) to application
            data.<br>

            The ng-bind directive binds application data to the HTML view.</p>

    </div>
    <div class="large-6 column">
        <p>First Name: <input type="text" data-ng-model="firstName"></p>

        <p ng-bind="firstName"></p>
    </div>
    <div class="large-6 column">
        <p>Last Name: <input type="text" data-ng-model="lastName"></p>

        <p ng-bind="lastName"></p>
    </div>
    <div class="class-12 column">
        <p>
            AngularJS starts automatically when the web page has loaded.<br>

            The ng-app directive tells AngularJS that the &lt;div&gt;element is the "owner" of an AngularJS application.<br>

            The ng-model directive binds the value of the input field to the application variable name.<br>

            The ng-bind directive binds the innerHTML of the &lt;p&gt; element to the application variable name.
        </p>
    </div>
    <div class="large-12 column">
        <h4>Directives</h4>
        <p>As you have already seen, AngularJS directives are HTML attributes with an ng prefix.<br>
            The ng-init directive initialize AngularJS application variables.<br>
            You can use data-ng-, instead of ng-, if you want to make your page HTML5 valid.
        </p>
    </div>
    <div class="large-12 column" data-ng-init="MyName='Mukesh Kumar Roy'">
    <p data-ng-bind="MyName"></p>
    </div>
    <div class="large-12 column">
        <h4>Expressions</h4>
        <p>
            AngularJs Expression is written in side double braces: {{Expression}}<br>
            AngularJs Expression binds data to html the same way as the ng-bind directive<br>
            AngularJs Expressioin will output data exactly where the expression is written.<br>

            My Expression {{5+5*5/5}}

        </p>
        <h4>Controllers</h4>
        <p>
            AngularJs Application are controlled by controllers.<br>
            The ng-controller directive define the controllers. The Controller code will execute when the page loads.
        </p>
    </div>
    <div class="large-12 column collapse" data-ng-controller="nameController">
        <div class="large-4 column">First Name : <input type="text" data-ng-model="CntfirstName"></div>
        <div class="large-4 column">Middle Name : <input type="text" data-ng-model="CntmiddleName"></div>
        <div class="large-4 column">Last Name : <input type="text" data-ng-model="CntlastName"></div>
        <div class="large-12 column">Full Name is : {{CntfirstName + " " + CntmiddleName+ " " + CntlastName}}<br><br></div>
    </div>

    <div class="large-12 column collapse" data-ng-controller="booksDetails">
        <div class="large-4 column">Book Name: <input type="text" data-ng-model="bookName"></div>
        <div class="large-4 column">Author Name: <input type="text" data-ng-model="authorName"></div>
        <div class="large-4 column">Category: <input type="text" data-ng-model="categoryName"></div>
        <div class="large-12 column">Books Details : {{bookName+" " +authorName+" " +categoryName}}<br><br></div>
    </div>

</div>

<?php require_once 'footer.php'; ?>
