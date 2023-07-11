<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include_once'../config.php';?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php
    function getPageTitle($url) {
        // Extract the page name from the URL
        $pageName = basename(parse_url($url, PHP_URL_PATH));
        // Apply different conditions and return the corresponding title
        if ($pageName == "accordion.php") {
            return "Accordion: Create Interactive Collapsible Content | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "ajax-and-json.php") {
            return "Ajax and JSON: Seamless Data Exchange for Dynamic Web Applications | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "animation-and-effects.php") {
            return "Animation and Effects: Bring Your Web Pages to Life | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "dom-manipulation.php") {
            return "DOM Manipulation: Interact with HTML Elements Dynamically | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "enhancing-plugins.php") {
            return "Enhancing Plugins: Extend Functionality with jQuery | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "event-handling.php") {
            return "Event Handling: Capture and Respond to User Actions | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "hide-show.php") {
            return "Hide and Show: Master Element Visibility Control | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "jquery-cheat-sheet.php") {
            return "jQuery Cheat Sheet: Quick Reference Guide for Essential Functions | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "slideshow.php") {
            return "Slideshow: Create Stunning Image Sliders with Ease | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } elseif ($pageName == "tip-card.php") {
            return "Tip Cards: Display Informative and Interactive Tips on Your Web Page | Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        } else {
            return "jQuery Supercharged: Elevate Your Web Development with Powerful Interactions and Effects, Guided by Mukesh Kumar Roy - UI Tech Lead, UI Developer, Web Designer";
        }
    }

    // Example usage
    $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/'; // Replace with the actual URL
    $title = getPageTitle($url);
    //echo $title;
    ?>

    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="../scss/app.css"/>
    <link rel="stylesheet" href="css/jQuery.css"/>
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../scss/ie.css"/>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php include_once 'metatag.php'; ?>
    <style>
        .dropdown > li > ul {
            display: none;
        }
    </style>
</head>
<body>
<header class="">
    <div class="row">
        <div class="large-12 column contain-to-grid sticky">
            <nav class="top-bar" data-topbar data-options="sticky_on: large">
                <ul class="title-area">
                    <li class="name"><a href="index.php" class="logo sprite"> mukeshroy.com </a></li>
                    <li class="toggle-topbar menu-icon"><a href="javascript:void(0);"><span> Menu </span></a></li>
                </ul>
                <section class="top-bar-section"> <!-- Right Nav Section -->
                    <h2 class="hide"> Main Navigation </h2>
                    <ul class="right">
                        <li><a href="../about.php"> Main Site </a> </li>
                        <li><a href="../css-projects"> CSS </a> </li>
                        <li class="has-dropdown"><a href="javascript:void(0);"> jQuery </a>
                            <ul class="dropdown">
                                <?php require_once 'js-list.php'; ?>
                            </ul>
                        </li>

                    </ul>

                </section>
            </nav>
        </div>
    </div>
</header>
<div class="row hide">
    <div class="small-3 column text-center">
        <a href="curriculum-vitae.php"><span class="circle-steps">Curriculum Vitae</span></a>
    </div>
    <div class="small-3 column text-center">
        <a href="javascript:void(0);"><span class="circle-steps">Work Strategy</span></a>
    </div>
    <div class="small-3 column text-center">
        <a href="javascript:void(0);"><span class="circle-steps">Download</span></a>
    </div>
    <div class="small-3 column text-center">
        <a href="javascript:void(0);"><span class="circle-steps">Site Map</span></a>
    </div>
</div>