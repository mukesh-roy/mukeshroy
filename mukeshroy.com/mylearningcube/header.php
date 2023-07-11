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
    <div class="large-5 small-5 column mg-0">
        <div class="row collapse pt-10">
            <div class="large-11 small-11 columns pd-0">
                <input type="text" class="search-box mg-0" placeholder="Search Course by typing in keywords">
            </div>
            <div class="large-1 small-1 columns pd-0">
                <button type="submit" class="search-button pd-5 mg-0"><span class="sprite search-icon"></span></button>
            </div>
        </div>
    </div>
    <div class="large-3 small-4 hide-for-medium hide-for-small column onfixed-hide">
        <div class="row collapse">
            <div class="large-3 column pd-0 mg-0"><a href="cart.php" class="sprite cart left mt-20"></a>
            </div>
            <div class="large-9 column visible pd-0 mg-0 login-required">
                <div class="large-11 small-11 column pd-0 mg-0 relative pt-10">
                    <div class="font-12">
                        <span class="sprite map"></span> India |
                        <a href="javascript:void(0);" data-reveal-id="state-modal" data-reveal-ajax="state-change.php">
                            Change </a>
                        <span class="login-required hide">| <a href="javascript:void(0);" data-reveal-id="login-modal">Login</a></span>
                    </div>
                    <div class="user-name font-12 mb-5">Mukesh kumar....</div>
                </div>
                <div class="user-pics absolute">
                    <a href="javascript:void(0);"><img src="images/user-pic.png"> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="large-12 column navigation">
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
                    <li class="has-dropdown">
                        <a href="javascript:void(0);"> Course Type <span class="new sprite"></span></a>
                        <ul class="dropdown">
                            <li><a href="category.php">Classroom Training</a></li>
                            <li><a href="category.php">Online Training</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-dropdown"><a href="javascript:void(0);"> About us </a>
                        <ul class="dropdown">
                            <li><a href="javascript:void(0);">Overview</a></li>
                            <li><a href="javascript:void(0);">Work with us</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-dropdown"><a href="javascript:void(0);"> Training Provider </a>
                        <ul class="dropdown">
                            <li><a href="javascript:void(0);"> Associate with Us </a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"> FAQ’s </a></li>
                    <li class="divider"></li>
                    <li class="has-dropdown"><a href="javascript:void(0);"> Contact us </a>
                        <ul class="dropdown">
                            <li><a href="javascript:void(0);"> Feedback </a></li>
                            <li><a href="javascript:void(0);"> Locations </a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
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
