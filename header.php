<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once 'config.php'; ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php
    function getPageTitle($url) {
        // Extract the page name from the URL
        $pageName = basename(parse_url($url, PHP_URL_PATH));
        // Apply different conditions and return the corresponding title
        if ($pageName == "index.php") {
            return "Enhance Your Web Design Skills with Mukesh Kumar Roy: UI Tech Lead, UI Developer, and Web Design Enthusiast";
        } elseif ($pageName == "about.php") {
            return "Discover the Story of Mukesh Kumar Roy: UI Tech Lead, UI Developer, and Web Design Specialist";
        } elseif ($pageName == "contact.php") {
            return "Get in Touch with Mukesh Kumar Roy: UI Tech Lead, UI Developer, and Web Design Expert";
        } else {
            return "Welcome to the World of Mukesh Kumar Roy: UI Tech Lead, UI Developer, and Web Design Guru";
        }
    }

    // Example usage
    $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/'; // Replace with the actual URL
    $title = getPageTitle($url);
    ?>

    <title><?php echo $title; ?></title>

    <meta name="description" content="Unleashing the Power of UI Development: Mukesh Kumar Roy - UI Tech Lead and Expert UI Developer. Welcome to the digital realm of Mukesh Kumar Roy, a distinguished UI Tech Lead and highly skilled UI Developer. Dive into a world of cutting-edge user interface design and development expertise as Mukesh shares his professional journey and accomplishments. With a proven track record in UI development, Mukesh brings a wealth of knowledge and hands-on experience to the table. Discover his exceptional proficiency in front-end technologies and frameworks, including HTML, CSS, JavaScript, and more. As a UI Tech Lead, Mukesh has honed his leadership skills and guided teams towards delivering outstanding user experiences. Explore his portfolio of innovative projects and witness his ability to seamlessly merge creativity and functionality. Whether you're an aspiring UI developer seeking inspiration or an organization in need of a seasoned UI Tech Lead, Mukesh Kumar Roy's website is your gateway to unlocking the full potential of UI development. For inquiries or collaboration opportunities, feel free to reach out to Mukesh Kumar Roy at mukesh84tech@gmail.com. Stay ahead of the curve with Mukesh as your trusted partner, as he shares valuable insights, industry best practices, and the latest trends in the ever-evolving field of UI development."/>
    <meta name="google-site-verification" content="Th4LX-5jvsxWGJjRl10uOqkK5znP5oObJAV6TWthdVE" />
    <link rel="stylesheet" href="scss/app.css"/>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="scss/ie.css"/>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php include_once 'metatag.php'; ?>
</head>
<body>
<header id="top-position">
    <div class="large-12 column contain-to-grid sticky">
        <nav class="top-bar page-scroll" data-topbar data-options="sticky_on: large">
            <ul class="title-area">
                <li class="name"><a href="index.php" class="logo sprite">mukeshroy.com</a></li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="javascript:void(0);"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section"> <!-- Right Nav Section -->
                <h2 class="hide">Main Navigation</h2>
                <ul class="right">

                    <li class="has-dropdown"><a href="javascript:void(0);">about Mukesh</a>
                        <ul class="dropdown">
                            <li><a href="index.php#about">about me</a></li>
                            <li><a href="index.php#curriculum-vitae">curriculum vitae</a></li>
                            <li><a href="professional-achievements.php">professional achievements</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#portfolio">portfolio</a></li>
                    <li><a href="mkr-resume.doc" target="_blank">my resume</a></li>
                    <li class="has-dropdown">
                        <a href="javascript:void(0);"><a href="css-projects">Tech</a>
                        <ul class="dropdown">
                            <li><a href="css-projects">CSS</a></li>
                            <li><a href="jQuery-projects">jQuery</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="javascript:void(0);">work strategy</a></li>
                    <li><a href="javascript:void(0);">download</a></li>
                    <li><a href="javascript:void(0);">site map</a></li>-->

                    <li class="has-dropdown"><a href="javascript:void(0);">Social</a>
                        <ul class="dropdown">
                            <li><a href="https://www.linkedin.com/in/mukesh84tech" target="_blank">Linkedin</a></li>
                            <li><a href="https://www.facebook.com/mukesh84tech" target="_blank">Facebook</a></li>
                            <li><a href="https://twitter.com/mukesh84tech" target="_blank">Twitter</a></li>
                           <!-- <li><a href="takeout-20140924T125740Z" target="_blank">Orkut Archive</a></li>-->
                        </ul>
                    </li>
                    <li><a href="#contact">contact</a></li>

                </ul>

            </section>
        </nav>
    </div>
</header>