<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>:: Done by None ::</title>
    <link rel="stylesheet" href="css/dbn-style.css"/>
    <?php require_once'detect-device.php';?>
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" media="all" />
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
<body class="checkout">
<?php require_once'header-checkout.php' ;?>

<div class="row">
    <div class="large-12 column gray-bg" id="user_seems_box">
        <div class="left seems-user-msg">
            <div class="seems-user">HEY YOU SEEM TO HAVE AN ACCOUNT WITH US!</div>
            <input type="email" value="rakshitmonga@yahoo.com" class="seems-id">
            <a href="javascript:void(0);" class="blue-txt">(<span class="underline">Edit</span>)</a>
        </div>
        <div class="right padd-tb-18 login2load">
                <button type="submit" class="secondary secondary-login" onclick="step2section()"> Login to load your details </button>
        </div>

        <div class="clear-both"></div>

        <div class="row hide step-2-section">
            <div class="hide large-12 column" id="password-sent">
                <div class="alert-box success">Your Password is sent to you on your email</div>
            </div>
            <div class="large-12">
                <div class="large-4 column">
                    Email<br>
                    <input type="email">
                </div>
                <div class="large-5 column">
                    Password
                    <div class="large-10"><input type="password"></div>
                    <div class="clear-both"></div>
                    <a href="javascript:void(0);" class="right blue-txt underline" id="submit_step2_2">Submit</a>
                    <a href="javascript:void(0);" class="blue-txt underline" id="forgot-password">Forgot Password</a>
                </div>
                <div class="large-1 column padd-tb-18">
                    <div class="dotted-1-brd text-center mt-10"> OR </div>
                </div>
                <div class="large-2 column pb-0">
                    SIGN IN WITH
                    <div class="clear-both"></div>
                    <a href="javascript:void(0);" class="left" style="width:38px;margin-right: 15px;"><img src="images/CHECKOUT_fb.jpg" class="pb-18"></a>

                    <a href="javascript:void(0);" class="left" style="width:38px;"><img src="images/CHECKOUT_gmail.jpg"></a>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>

        <div class="hide" id="forgot-password-section">

                <div class="large-4 left">
                    Email<br>
                    <input type="email">
                </div>
                <div class="large-4 left">
                  <a href="javascript:void(0);" class="blue-txt underline left" id="send-my-password">Send My Password</a>
                </div>
                <div class="clear-both"></div>
        </div>
        <div class="clear-both"></div>
    </div>
    <div class="clear-both"></div>
    <div class="large-12 column hide" id="step2-3-address">
        <div class="row">
            <div class="large-1 column edit-radio">
                <input type="radio" name="edit-checkout" id="hide-creat-address" checked="checked">
            </div>
            <div class="large-11 column edit-address-details">

                <div class="dotted-1-brd step2-head blue-bg">CHOOSE AN EXISTING ADDRESS</div>
                <div class="clear-both pd-5"></div>
                <div class="row" id="choose_existing_address">
                    <div class="large-1 column edit-radio">
                        <input type="radio" name="address-radio">
                    </div>
                    <div class="large-5 column address2-3">
                        <strong class="title">HOME</strong>
                        <address>
                            CHARU TRIPATHI<br>
                            D-16, II Floor,<br>
                            Green Park Main,<br>
                            New Delhi - 110016<br>
                            <a href="javascript:void(0);" class="blue-txt small-txt">Edit</a>
                        </address>
                    </div>
                    <div class="large-1 column edit-radio">
                        <input type="radio" name="address-radio">
                    </div>
                    <div class="large-5 column address2-3">
                        <strong class="title">OFFICE</strong>
                        <address>
                            CHARU TRIPATHI<br>
                            Intuitent Online Ventures,<br>
                            9106, Garden Villas,<br>
                            Sector - 43, DLF Phase IV<br>
                            Gurgaon,<br>
                            Haryana - 122002<br>
                            <a href="javascript:void(0);" class="blue-txt small-txt">Edit</a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
        <div class="row">
            <div class="large-1 column edit-radio">
                <input type="radio" name="edit-checkout" id="edit_address_radio">
            </div>
            <div class="large-11 column edit-address-details">
                    <div class="dotted-1-brd step2-head blue-bg">CREATE A NEW ADDRESS</div>
                    <div class="clear-both pd-5"></div>
                    <div class="large-12" id="step2-3-form">
                          <?php include'step2form.php' ;?>
                    </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>
    <div class="clear-both"></div>
    <div class="clear-both padd-tb-18"></div>
    <div class="large-12 column checkout-step-2" id="step2-2-form">
            <div class="dotted-1-brd step2-head blue-bg">ENTER YOUR DETAILS</div>
            <div class="clear-both pd-5"></div>
            <?php include'step2form.php' ;?>
    </div>
</div>

<?php require_once'footer-checkout.php';?>

