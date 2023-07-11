<?php include_once 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/tip_cards.css">
<div class="row">
    <div class="large-12 column">
        <style>
            .child {
                background-color: yellow;
            }
        </style>
        <h1>Event Handling and Interactive Forms (jQuery v2.1.1)</h1>

        <h2>Responding to User Interactions</h2>
        <p>To respond to user interactions, you need to identify the events that occur and define the actions or functions that should be executed when those events happen. Common user interactions include clicking, hovering, typing, scrolling, and more.</p>

        <h2>Handling Click and Hover Events</h2>
        <p>Click and hover events are two commonly used interactions that can trigger actions on web pages. The click event occurs when the user clicks on an element, while the hover event happens when the user's cursor hovers over an element.</p>

        <h3>Example 1: Handling click event</h3>
        <button id="clickButton">Click Me</button>

        <h3>Example 2: Handling hover event</h3>
        <div id="hoverElement" style="width: 200px; height: 200px; background-color: lightblue;"></div>

        <h2>Event Delegation for Dynamic Content</h2>
        <p>Event delegation is a technique used to handle events on dynamically added or removed elements. Instead of attaching event listeners to each individual element, you attach a listener to a parent element that is already present on the page. When an event occurs on a child element, it is handled by the parent element.</p>

        <h3>Example 3: Event delegation for dynamic content</h3>
        <div id="parent">
            <div class="child">Child 1</div>
            <div class="child">Child 2</div>
            <div class="child">Child 3</div>
        </div>

        <h2>Creating Interactive Forms</h2>
        <p>Forms are an essential part of many web applications. You can use event handling to create interactive forms by responding to user input, validating data, and submitting form data.</p>

        <h3>Example 4: Handling form submission</h3>
        <form id="myForm">
            <input type="text" id="nameInput" placeholder="Enter your name">
            <button type="submit">Submit</button>
        </form>


    </div>
</div>

<?php include_once 'footer.php'; ?>
