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
        if ($pageName == "boxmodal.php") {
            return "Unleashing the Power of CSS Box Modals | Mukesh Kumar Roy - UI Tech Lead, Web Design Expert";
        } elseif ($pageName == "grid.php") {
            return "Mastering CSS Grid Layouts: Your Key to Stunning Web Designs | Mukesh Kumar Roy - UI Tech Lead, UI Developer";
        } elseif ($pageName == "id.php") {
            return "CSS IDs Decoded: Unveiling the Secrets of Selecting and Styling Elements | Mukesh Kumar Roy - UI Tech Lead, Web Design Specialist";
        } elseif ($pageName == "keyframes.php") {
            return "Animating Your Web World: Unleash Creativity with CSS Keyframes | Mukesh Kumar Roy - UI Tech Lead, Animation Enthusiast";
        } elseif ($pageName == "pseudoclass.php") {
            return "Harnessing CSS Pseudo-classes: Elevate Your Styling Superpowers | Mukesh Kumar Roy - UI Tech Lead, UI Developer";
        } elseif ($pageName == "validation_pseudoclass.php") {
            return "Mastering Form Validation with CSS Pseudo-classes | Mukesh Kumar Roy - UI Tech Lead, Web Design Pro";
        } elseif ($pageName == "unicode-range.php") {
            return "Unlocking the Magic of Unicode Range: Customize Fonts and Icons with CSS | Mukesh Kumar Roy - UI Tech Lead, Font Guru";
        } elseif ($pageName == "float.php") {
            return "CSS Floats Unleashed: Create Flexible Web Layouts with Ease | Mukesh Kumar Roy - UI Tech Lead, Layout Maestro";
        } else {
            return "Embark on a CSS Journey: Unleash Your Design Potential with Mukesh Kumar Roy - UI Tech Lead, Web Design Maverick";
        }
    }

    // Example usage
    $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/'; // Replace with the actual URL
    $title = getPageTitle($url);
    ?>

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="css/a2z.css"/>
    <link rel="stylesheet" href="../scss/app.css"/>
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo $AccessoriesURL ;?>scss/ie.css"/>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php include_once 'metatag.php'; ?>
</head>
<body>
<header>
    <div class="large-12 column contain-to-grid sticky">
            <nav class="top-bar" data-topbar data-options="sticky_on: large">
                <ul class="title-area">
                    <li class="name"><a href="index.php" class="logo sprite"> mukeshroy.com </a></li>
                    <li class="toggle-topbar menu-icon"><a href="javascript:void(0);"><span> Menu </span></a></li>
                </ul>
                <section class="top-bar-section"> <!-- Right Nav Section -->
                    <h2 class="hide"> Main Navigation </h2>
                    <ul class="right">
                        <li><a href="../index.php"> Main Site </a> </li>
                        <li class="has-dropdown"><a href="javascript:void(0);"> CSS </a>
                            <ul class="dropdown">
                                <?php require_once 'css-list.php'; ?>
                            </ul>
                        </li>
                       <!-- <li><a href="../jQuery-projects"> jQuery </a></li>-->

                    </ul>

                </section>
            </nav>
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