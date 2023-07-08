<!doctype html>
<html class="no-js" lang="en" data-ng-app>
<head>
    <?php include_once'../config.php';?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>:: Welcome to my projects :: </title>
    <link rel="stylesheet" href="../scss/app.css"/>
    <link rel="stylesheet" href="css/a2z.css"/>
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <script src="js/angular.min.js"></script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo $AccessoriesURL ;?>scss/ie.css"/>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php include_once 'metatag.php'; ?>
</head>
<body>
<header>
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
                        <li><a href="../about.php"> about </a> </li>
                        <li class="has-dropdown"><a href="javascript:void(0);"> AngularJS </a>
                            <ul class="dropdown">
                                <?php require 'ng-list.php'; ?>
                            </ul>
                        </li>
                       <!-- <li><a href="../jQuery-projects"> jQuery </a></li>-->

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