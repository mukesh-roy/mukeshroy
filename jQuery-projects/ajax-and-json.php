<?php include_once 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/tip_cards.css">
<div class="row">
    <div class="column-large-12">
        <style>
            .result {
                margin-top: 20px;
            }
        </style>
        <h1> AJAX and JSON - Making Asynchronous Requests with jQuery</h1>

        <h2>Section 1: Making Asynchronous Requests with jQuery</h2>
        <h3>1.1 Understanding Asynchronous Requests</h3>
        <p>
            Explanation of synchronous vs. asynchronous requests.<br>
            Advantages of asynchronous requests for user experience and performance.<br>
            Introduction to jQuery's AJAX functions for making asynchronous requests.
        </p>

        <h3>1.2 The jQuery AJAX Function</h3>
        <p>
            Overview of the jQuery AJAX function and its parameters.<br>
            Making GET and POST requests with AJAX.<br>
            Handling different data types (text, HTML, JSON) in AJAX requests.
        </p>

        <h3>1.3 Sending and Receiving Data</h3>
        <p>
            Sending data with AJAX using request parameters.<br>
            Serializing form data and sending it via AJAX.<br>
            Handling server-side validation and error responses.
        </p>

        <h2>Section 2: Handling Server Responses</h2>
        <h3>2.1 Understanding Server Responses</h3>
        <p>
            Overview of different server response formats (HTML, XML, JSON).<br>
            Choosing the appropriate response format for AJAX requests.
        </p>

        <h3>2.2 Handling HTML and Text Responses</h3>
        <p>
            Updating content on the web page with HTML and text responses.<br>
            Inserting server-generated HTML into the DOM.<br>
            Modifying existing HTML elements with response data.
        </p>

        <h3>2.3 Working with JSON Responses</h3>
        <p>
            Introduction to JSON and its structure.<br>
            Parsing JSON responses in JavaScript.<br>
            Extracting and using JSON data to update the web page dynamically.
        </p>

        <h2>Section 3: Working with JSON Data</h2>
        <h3>3.1 Creating JSON Objects</h3>
        <p>
            Explanation of JSON syntax and key-value pairs.<br>
            Constructing JSON objects manually in JavaScript.<br>
            Converting JavaScript objects to JSON using JSON.stringify().
        </p>

        <h3>3.2 Fetching JSON Data with AJAX</h3>
        <p>
            Retrieving JSON data from a server using AJAX.<br>
            Processing and displaying JSON data on the web page.
        </p>

        <h3>3.3 Manipulating JSON Data</h3>
        <p>
            Modifying JSON data on the client-side.<br>
            Adding, updating, and deleting JSON properties.<br>
            Saving changes and sending the modified JSON back to the server.
        </p>

        <h2>Section 4: Updating Content Dynamically</h2>
        <h3>4.1 Implementing Dynamic Content Updates</h3>
        <p>
            Using AJAX and JSON to update content without page reloads.<br>
            Fetching new data from the server periodically with AJAX.
        </p>

        <h3>4.2 Creating Interactive Web Components</h3>
        <p>
            Building interactive elements that respond to user actions.<br>
            Updating content based on user input or events.
        </p>

        <h3>4.3 Real-time Updates with WebSockets</h3>
        <p>
            Introduction to WebSockets for real-time communication.<br>
            Implementing real-time updates using WebSockets and JSON.
        </p>


        <h2>Example: Fetching JSON Data with AJAX</h2>
        <p>
            Here's an example of using jQuery AJAX to fetch JSON data from a server and display it on the web page:
        </p>

        <button id="loadDataButton">Load Data</button>
        <div id="resultContainer" class="result"></div>


    </div>
</div>

<?php include_once 'footer.php'; ?>
<script>
    $(document).ready(function () {
        $("#loadDataButton").click(function () {
            $.ajax({
                url: "data.json", // Replace with your server URL
                dataType: "json",
                success: function (data) {
                    var resultContainer = $("#resultContainer");
                    resultContainer.empty();

                    $.each(data, function (index, item) {
                        var listItem = $("<p>").text(item.name +' ' + item.age +' ' +item.occupation);
                        resultContainer.append(listItem);
                    });
                },
                error: function () {
                    alert("Failed to load data.");
                }
            });
        });
    });
</script>

