<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'header.php'; // Include the footer file
}
?>
<div class="row">

<div class="large-12 column"><h1>&lt;Portfolio&gt;</h1>

    <ul class="cat-filter single-line-list">
        <li class="active"><a href="javascript:void(0);" class="all">All <span class="filter-selected sprite"></span> </a></li>
        <li><a href="javascript:void(0);" class="tool">Project Management Tool <span class="filter-selected sprite"></span> </a></li>
        <li><a href="javascript:void(0);" class="e-commerce">e-commerce <span class="filter-selected sprite"></span> </a></li>
        <li><a href="javascript:void(0);" class="e-learning">e-learning <span class="filter-selected sprite"></span> </a></li>
        <li><a href="javascript:void(0);" class="stock-market">stock research <span class="filter-selected sprite"></span> </a>
        </li>
        <li><a href="javascript:void(0);" class="other-services">other services <span class="filter-selected sprite"></span></a></li>
    </ul>

</div>
<div class="category-section lblca">
    <div class="large-3 small-6 column tool">
        <img class="cat-pics" src="images/portfolio/istrives1.png" alt="Creating Beautiful Experiences: Your Beauty, Our Passion, Driven by UI Developers and UX Engineers">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5"> "iStrives" is a project management and team performance monitoring tool developed by the parent company Nityo Infotech and its subsidiary Swivelt. Tools like these are designed to assist teams and organizations in effectively managing their projects, tracking progress, promoting collaboration, and evaluating team performance. </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="0">Quick View &rsh;</a>
            </div>
        </div>
    </div>

    <div class="large-3 small-6 column e-commerce">
        <img class="cat-pics" src="images/portfolio/nykaa.png" alt="Creating Beautiful Experiences: Your Beauty, Our Passion, Driven by UI Developers and UX Engineers">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Nykaa is a prominent Indian e-commerce company specializing in beauty, wellness, and personal care products. Founded in 2012, it offers an extensive range of cosmetics, skincare, and haircare products through its online platform. Nykaa has gained popularity for its diverse product selection and reliable shopping experience.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="0">Quick View &rsh;</a>
            </div>
        </div>
    </div>

    <div class="large-3 small-6 column e-learning">
        <img class="cat-pics" src="images/portfolio/mylearningcube.png" alt="Crafting Responsive Experiences: Your Success, Our Passion, Powered by UI Developers and UX Engineers at Nityo Info Tech Services Pvt Ltd.">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">My Learning Cube is an e-learning solutions management portal developed by Nityo Infotech. It provides a diverse range of courses on project management (PMP), IT service management (ITIL), and technical subjects. The platform serves as a gateway for learners to access and enroll in these courses, allowing them to enhance their knowledge and skills in their respective fields.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="0">Quick View &rsh;</a>
            </div>
        </div>
    </div>

    <div class="large-3 small-6 column e-commerce">
        <img class="cat-pics" src="images/portfolio/donebynone.png" alt="Designing Trendsetting Experiences: Your Style, Our Passion, Crafted by UI Developers and UX Engineers at DoneByNone">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Done By None is a fashion brand dedicated to those who love exploring truly original styles. They offer a wide range of trendy apparel and accessories that will put you on the style radar. Whether you're looking for the latest fashion trends or unique pieces to express your individuality, Done By None has you covered.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="1">Quick view &rsh;</a></div>
        </div>
    </div>


    <div class="large-3 small-6 column e-learning">
        <img class="cat-pics" src="images/portfolio/meritnation1.png" alt="Elevating Learning Experiences: Your Academic Success, Our Passion, Enriched by UI Developers and UX Engineers at Meritnation">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li>Meritnation is an educational platform that delivers learning solutions of a global standard. It provides a wide range of educational resources, including study materials, interactive videos, practice exercises, and live classes. With a focus on quality education, Meritnation aims to support students in their academic journey by offering comprehensive and standardized learning materials to help them excel in their studies.</li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);"  data-orbit-link="3">Quick view &rsh;</a></div>
        </div>
    </div>

    <div class="large-3 small-6 column e-commerce">
        <img class="cat-pics" src="images/portfolio/farmerzden.png" alt="Cultivating User-Friendly Experiences: Your Farming Journey, Our Passion, Nurtured by UI Developers and UX Engineers at Farmerzden">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Farmerzden is an e-commerce website that focuses on providing a platform for farmers and agricultural enthusiasts. It offers a range of products and services related to farming, including agricultural equipment, seeds, fertilizers, livestock, and farm management tools. Farmerzden aims to support the farming community by offering a convenient online marketplace for all their agricultural needs.</li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="2">View Details&rsh;</a></div>
        </div>
    </div>

    <div class="large-3 small-6 column e-learning">
        <img class="cat-pics" src="images/portfolio/meritnation2.png" alt="Elevating Learning Experiences: Your Academic Success, Our Passion, Enriched by UI Developers and UX Engineers at Meritnation">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li>We at meritnation has the creativity, technical excellence, tenacity, and can-do spirit to deliver learning solutions of a global standard.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="4">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column e-commerce">
        <img class="cat-pics" src="images/portfolio/bonhomie.png" alt="A Little eCommerce website">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">
                    Bonhomie Plastics Pvt. Ltd is a manufacturing company that specializes in the production and supply of plastic packaging products. Their product range includes various types of plastic packaging solutions, such as containers, bottles, jars, pouches, and other related items. They cater to both local and global markets, offering their products to customers worldwide. With a focus on quality and reliability, Bonhomie Plastics Pvt. Ltd aims to meet the packaging needs of diverse industries and provide effective solutions for storing and transporting various goods.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="5">View Details&rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column stock-market">
        <img class="cat-pics" src="images/portfolio/ubikaresearch.png" alt="Unveiling Investment Insights: Your Financial Growth, Our Passion, Revealed by UI Developers and UX Engineers at Ubika Research">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Ubika Research is an investment research and capital market services firm with offices in Toronto and Vancouver. They have a successful history of identifying and initiating coverage of promising small cap stocks in their early stages. By doing so, they provide timely market insights to investors. Ubika Research specializes in conducting in-depth research, analysis, and providing recommendations to help investors make informed decisions in the ever-changing financial markets. Their expertise and track record make them a valuable resource for individuals seeking reliable investment insights and opportunities.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="6">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column stock-market">
        <img class="cat-pics" src="images/portfolio/smallcappower.png" alt="A complete soltuion for investor, US based project">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">SmallCapPower.com is a premier resource for small-cap investors. Their unique website offers unparalleled engagement and access to a wide range of resources. Visitors can connect with small-cap companies, research analysts, subject matter experts, investment professionals, and fellow site visitors. The platform provides valuable insights, research reports, expert opinions, and investment information related to small-cap stocks. SmallCapPower.com is a go-to destination for individuals seeking comprehensive and specialized resources to support their small-cap investment decisions.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="7">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column other-services">
        <img class="cat-pics" src="images/portfolio/sainfra.png" alt="Infrastructure project for a SA Infrastructure Consultant company">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">SA Infrastructure Consultants Pvt Ltd is a prominent multidisciplinary organization specializing in civil engineering. They are recognized for their expertise in various areas, including highways structures, urban and rural infrastructure development, water resource development, as well as traffic and environmental studies. With a professional team, they offer comprehensive services related to infrastructure planning, design, and implementation. SA Infrastructure Consultants Pvt Ltd plays a vital role in shaping and developing sustainable infrastructure projects, contributing to the growth and improvement of communities and regions.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="8">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column other-services">
        <img class="cat-pics" src="images/portfolio/astrologybyamit.png" alt="Astrology Website">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Amit Lamba is a renowned astrologer based in Rohtak, Haryana, India. With his expertise in astrology, he provides consultations and guidance to individuals seeking astrological insights and advice. Apart from his independent practice, Amit Lamba has also served as a consultant with other astrology portals. Through his consultations, he assists clients in various aspects of life, including career, relationships, health, and personal development. With a wealth of experience and knowledge in the field of astrology, Amit Lamba continues to offer valuable guidance to those seeking clarity and direction in their lives.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="9">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column other-services">
        <img class="cat-pics" src="images/portfolio/general-gauges.png" alt="A Little Store for Instruments">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">General Instruments Consortium holds the distinction of being the largest and most established manufacturer of process control instruments. With over four decades of experience, they specialize in designing, manufacturing, and exporting primary process control instruments. Their expertise primarily lies in engineering parameters related to pressure and level measurements. General Instruments Consortium is dedicated to delivering high-quality instruments that ensure accurate and reliable control in various industrial processes. Their long-standing presence in the industry reflects their commitment to excellence and their ability to meet the demanding requirements of the process control sector.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="10">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column e-learning">
        <img class="cat-pics" src="images/portfolio/agarwalstudycentre.png" alt="A Website of study Center for Meritnation">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Agarwal Study Centre started its journey in 1992 as a humble venture. Initially, it consisted of just one teacher and four students. Despite its modest beginnings, Agarwal Study Centre laid the foundation for providing educational support and guidance to students. Over the years, it has grown and expanded its offerings, catering to a wider student base. With a focus on quality education and personalized attention, Agarwal Study Centre has evolved into a trusted institution, helping students achieve their academic goals and nurturing their intellectual growth.</li></ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="11">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column e-learning">
        <img class="cat-pics" src="images/portfolio/tutors-help.png" alt="eLearning website">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Tutors-help.com is a highly reputable online tutoring company that is widely recognized for its unmatched quality and excellence. As a leading provider of online tutoring services, it has successfully catered to the academic needs of thousands of students from around the world. Tutors-help.com takes pride in offering personalized and satisfactory tutoring solutions tailored to each student's specific requirements. With a team of qualified and experienced tutors, the company ensures that students receive the necessary guidance and support to excel in their studies. The track record of Tutors-help.com speaks for itself, as it continues to deliver top-notch tutoring services and remains a preferred choice among students seeking academic assistance.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);"  data-orbit-link="12">Quick view &rsh;</a></div>
        </div>
    </div>
    <div class="large-3 small-6 column other-services">
        <img class="cat-pics" src="images/portfolio/servicemagici.png" alt="Website Development Project">

        <div class="light-bg"></div>
        <div class="absolute cat-ingredients">
            <ul class="ingredients-list">
                <li class="text-justify pd-5">Service Magic is a reputable company based in Shahadra, Delhi, India, specializing in web development, internet marketing, and search engine optimization (SEO) services. With a focus on helping businesses establish and enhance their online presence, Service Magic offers a range of solutions to meet their clients' needs. Their web development services include designing and creating websites that are visually appealing, user-friendly, and optimized for search engines. They also provide internet marketing services to promote businesses through various online channels, such as social media, email marketing, and paid advertising. In addition, Service Magic offers SEO services to improve website rankings in search engine results, increasing visibility and attracting targeted traffic. With their expertise and dedication to client success, Service Magic serves as a valuable partner for businesses looking to thrive in the digital landscape.
                </li>
            </ul>
            <div class="cat-details"><a href="javascript:void(0);" data-orbit-link="13">Quick view &rsh;</a></div>
        </div>
    </div>

</div>
<div class="large-12 column"><h1>&lt;/Portfolio&gt;</h1></div>
</div>


<div id="portfolio-container" data-reveal class="reveal-modal large">
    <input id="portfolioContainerTrackon" type="hidden" value="0">
    <?php //require_once 'portfolio-slider.php'; ?>
</div>

<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page URL

if ($current_page !== 'index.php') {
    require_once 'footer.php'; // Include the footer file
}
?>

