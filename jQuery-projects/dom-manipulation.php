<?php include_once 'header.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/tip_cards.css">
    <div class="row">
        <div class="large-12 column">

            <h1>DOM Manipulation</h1>

            <h2>Understanding the Document Object Model (DOM)</h2>
            <p>The Document Object Model (DOM) is a programming interface for HTML and XML documents. It represents the structure of a web page as a hierarchical tree-like structure, with each element as a node in the tree. Understanding the DOM is crucial for manipulating and interacting with web page elements dynamically.</p>

            <h2>Selecting and Modifying Elements</h2>
            <p>One of the primary tasks in DOM manipulation is selecting specific elements on a web page and modifying their properties. The DOM provides several methods and techniques for selecting elements based on their IDs, classes, tag names, or other attributes.</p>

            <h3>Example 1: Selecting elements by ID</h3>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;head&gt;
                    &lt;title&gt;DOM Manipulation Example&lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;h1 id="heading"&gt;Hello, World!&lt;/h1&gt;
                    &lt;script&gt;
                    const heading = document.getElementById('heading');
                    heading.innerHTML = 'Modified Heading';
                    &lt;/script&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>

            <h2>Changing Attributes and Content</h2>
            <p>Once an element is selected, you can change its attributes, such as its class, style, or other properties. Additionally, you can modify the content of an element by changing its text or HTML structure.</p>

            <h3>Example 2: Changing attributes and content</h3>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;head&gt;
                    &lt;title&gt;DOM Manipulation Example&lt;/title&gt;
                    &lt;style&gt;
                    .highlight {
                    background-color: yellow;
                    font-weight: bold;
                    }
                    &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;p id="paragraph"&gt;This is a sample paragraph.&lt;/p&gt;
                    &lt;script&gt;
                    const paragraph = document.getElementById('paragraph');
                    paragraph.classList.add('highlight');
                    paragraph.innerHTML = 'Modified paragraph';
                    &lt;/script&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>

            <h2>Adding and Removing Classes</h2>
            <p>Adding or removing classes from elements allows you to apply or remove specific styles dynamically.</p>

            <h3>Example 3: Adding and removing classes</h3>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;head&gt;
                    &lt;title&gt;DOM Manipulation Example&lt;/title&gt;
                    &lt;style&gt;
                    .highlight {
                    background-color: yellow;
                    font-weight: bold;
                    }
                    &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;p id="paragraph"&gt;This is a sample paragraph.&lt;/p&gt;
                    &lt;script&gt;
                    const paragraph = document.getElementById('paragraph');
                    paragraph.classList.add('highlight');
                    // ... Do some operations ...
                    paragraph.classList.remove('highlight');
                    &lt;/script&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>

            <p>By mastering DOM manipulation, you can dynamically modify web page content, style elements, and create interactive user experiences. Practice and experimentation will help you become proficient in using the DOM effectively for building dynamic web applications.</p>
        </div>
    </div>

<?php include_once 'footer.php'; ?>