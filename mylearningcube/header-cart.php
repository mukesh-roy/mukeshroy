<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>:: welcome to My Career Upgrae.com :: </title>
    <link rel="stylesheet" href="css/app.css"/>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<header class="row">
    <div class="large-4 small-7 column"><a href="index.php" class="sprite logo"></a></div>

    <div class="large-4 column navigation">
        <nav class="top-bar" data-topbar data-options="back_text: &laquo; Back">
            <ul class="title-area">
                <li class="name"></li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <div class="right request-call-title relative">
                    <a href="javascript:void(0);" class="font-12 js-request-call"><span class="sprite phone"></span>
                        Request a call back</a>

                    <div class="request-call-form absolute z-index-2">
                        <form id="request-call-back" action="javascript:void(0);"
                              enctype="application/x-www-form-urlencoded" method="POST">
                            Need Assitance? Let us call you for FREE
                            <div>
                                <input type="text" maxlength="100" id="name" name="name" placeholder="Enter your Name">

                                <div class="error-msg">Please enter a proper name</div>
                            </div>
                            <div>
                                <input type="text" maxlength="100" id="email" name="email"
                                       placeholder="Enter your email address">

                                <div class="error-msg">Please enter a proper Email-id</div>
                            </div>
                            <div>
                                <input type="text" maxlength="15" id="phone" name="phone"
                                       placeholder="Enter your phone number">

                                <div class="error-msg">Please enter a proper phone number</div>
                            </div>
                            <div class="call-button-border mb-m2">
                                Availablity : 24 x 7
                                <input type="submit" value="Call Now" class="button right radius">
                            </div>
                        </form>
                        <div class="pd-5 red-txt" id="status-message"></div>
                    </div>
                </div>

                <!-- Left Nav Section -->
                <ul class="left onfixed-hide">
                    <li class="has-dropdown"><a href="javascript:void(0);"> Live Support </a>
                        <ul class="dropdown">
                            <li><a href="javascript:void(0);"> Knowledgebase </a></li>
                            <li><a href="javascript:void(0);"> Raise a ticket </a></li>
                        </ul>
                    </li>
                </ul>


            </section>
        </nav>
    </div>

</header>
