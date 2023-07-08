<?php include_once 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/tip_cards.css">
<div class="row">
    <div class="large-12 column">

        <h1>Introduction to jQuery</h1>
        <ul>
            <li>
                <h2>What is jQuery?</h2>
                <p>jQuery is a fast, lightweight, and feature-rich JavaScript library designed to make client-side scripting easier and more efficient. It provides a powerful and concise way to interact with HTML elements, manipulate their attributes and content, and respond to user actions.</p>
            </li>
            <li>
                <h2>Benefits of using jQuery</h2>
                <p>Using jQuery offers several advantages for web developers:</p>
                <ul>
                    <li>Simplified DOM manipulation: jQuery provides a concise syntax for selecting, traversing, and modifying HTML elements on a web page.</li>
                    <li>Cross-browser compatibility: jQuery eliminates the need to write browser-specific code by providing a unified interface that works consistently across different browsers.</li>
                    <li>Extensive plugin ecosystem: jQuery has a vast ecosystem of plugins that extend its functionality.</li>
                    <li>Animation and effects: jQuery simplifies the creation of animations and visual effects on web pages.</li>
                    <li>Ajax support: jQuery includes powerful features for making asynchronous HTTP requests, known as Ajax.</li>
                </ul>
            </li>
            <li>
                <h2>Adding jQuery to your project</h2>
                <p>To use jQuery in your web project, you need to include the jQuery library in your HTML file.</p>
                <p>For example, to include jQuery using a CDN, you can add the following script tag in the head or body section of your HTML file:</p>
                <pre><code>&lt;script src="https://code.jquery.com/jquery-3.6.0.min.js"&gt;&lt;/script&gt;</code></pre>
            </li>
            <li>
                <h2>Basic jQuery syntax and selectors</h2>
                <p>The syntax of jQuery follows a pattern of selecting HTML elements and performing actions on them.</p>
                <p>Here's an example that demonstrates the basic syntax of jQuery:</p>
                <pre>
                    <code>
                        $(document).ready(function() {
                            // jQuery code here
                        });
                    </code>
                </pre>
                <p>jQuery uses CSS-like selectors to target HTML elements.</p>
                <p>For example, to select all paragraphs on a page and change their text color to red, you can use the following code:</p>
                <pre>
                    <code>
                        $(document).ready(function() {
                            $('p').css('color', 'red');
                        });
                    </code>
                </pre>
            </li>
        </ul>

    </div>
</div>

<?php include_once 'footer.php'; ?>