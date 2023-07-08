<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'header.php'; // Include the footer file
}
?>


<div class="row">
    <div class="large-12 column">
        <h1>&lt;Professional Achievements&gt;</h1>
        <figure>
            <img src="images/Award-Acceptance-Ceremony.png" alt="Mukesh Kumar Roy receiving prestigious award on stage, holding certificate with pride and gratitude." align="right" style="max-width: 400px">
            <figcaption>
                <p>I am proud to have recently been awarded a certificate for successfully participating in CMMI Level 3 and 5. These certifications demonstrate my commitment to process improvement and organizational excellence. Achieving CMMI Level 3 and 5 signifies my expertise in leading and contributing to high-performing teams, ensuring the delivery of top-quality products and services.</p>

                <p>By incorporating CMMI best practices and methodologies, I have consistently contributed to enhancing operational efficiency and optimizing project outcomes. Through continuous learning and implementation, I have acquired a deep understanding of process improvement frameworks and strategies.</p>

                <p>My journey towards achieving CMMI certifications has been an incredible experience, enabling me to foster a culture of quality and innovation within organizations. It has honed my skills in analyzing, designing, and implementing robust processes that adhere to industry standards and drive sustainable growth.</p>

                <p>Feel free to explore this section and discover more about my professional achievements. If you have any questions or would like to discuss potential collaborations or opportunities, please don't hesitate to reach out. I am excited to share my knowledge and contribute to your organization's success.</p>

                <p>Thank you for visiting my website, and I look forward to connecting with you soon!</p>
            </figcaption>
        </figure>


        <h1>&lt;/Professional Achievements&gt;</h1>
    </div>
</div>
<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'footer.php'; // Include the footer file
}
?>


