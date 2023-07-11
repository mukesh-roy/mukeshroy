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
    <div class="clear-both pd-5"></div>
    <div class="large-12 column">
        <div class="dotted-1-brd step2-head">choose your mode of payment!</div>
        <div class="clear-both pb-18"></div>
        <div class="relative payment-tab" id="payment-tab">
            <ul class="no-bullet no-mg">
                <li class="payment-method-one active-method">
                    <div class="large-4 left"><a href="javascript:void(0);" class="method-tab"> <span class="dbn-sprite"></span> CASH ON DELIVERY </a></div>
                    <div class="large-8 right payment-content">
                        <span class="dbn-sprite absolute active-content-arrow"></span>
                        <div class="pay-method-head">PAY CASH ON DELIVERY</div>
                        <strong>TOTAL COST : Rs. 2500</strong>
                        <div class="clear-both pb-18"></div>
                        <a href="success.php" class="button place-order-pink">PLACE AN ORDER</a>

                    </div>
                </li>
                <li class="payment-method-two">
                    <div class="large-4 left"><a href="javascript:void(0);" class="method-tab"> <span class="dbn-sprite"></span> DEBIT CARD </a></div>
                    <div class="large-8 right payment-content">
                        <span class="dbn-sprite absolute active-content-arrow"></span>
                        <div class="pay-method-head">PAY USING DEBIT CARD</div>
                        <strong>TOTAL COST : Rs. 2500</strong>
                        <div class="clear-both pb-18"></div>
                        <div class="large-4 pd-5 left">Choose your card type:</div>
                        <div class="large-3 left">
                            <select class="pd-5">
                                <option>--------Select--------</option>
                            </select>
                        </div>
                        <div class="clear-both pb-18"></div>
                        <a href="success.php" class="button place-order-pink">PLACE AN ORDER</a>
                    </div>
                </li>
                <li class="payment-method-three">
                    <div class="large-4 left"><a href="javascript:void(0);" class="method-tab"> <span class="dbn-sprite"></span> CREDIT CARD </a></div>
                    <div class="large-8 right payment-content">
                        <span class="dbn-sprite absolute active-content-arrow"></span>
                        <div class="pay-method-head">PAY USING CREDIT CARD</div>
                        <strong>TOTAL COST : Rs. 2500</strong>
                        <div class="clear-both pb-18"></div>
                        <div class="clear-both pb-18"></div>
                        <a href="success.php" class="button place-order-pink">PLACE AN ORDER</a>
                    </div>
                </li>
                <li class="payment-method-four">
                    <div class="large-4 left"><a href="javascript:void(0);" class="method-tab"> <span class="dbn-sprite"></span> NET BANKING </a></div>
                    <div class="large-8 right payment-content">
                        <span class="dbn-sprite absolute active-content-arrow"></span>
                        <div class="pay-method-head">PAY USING NET BANKING</div>
                        <strong>TOTAL COST : Rs. 2500</strong>
                        <div class="clear-both pb-18"></div>
                        <div class="large-4 pd-5 left">Choose your bank:</div>
                        <div class="large-3 left">
                            <select class="pd-5">
                                <option>--------Select--------</option>
                            </select>
                        </div>
                        <div class="clear-both pb-18"></div>
                        <a href="success.php" class="button place-order-pink">PLACE AN ORDER</a>
                    </div>
                </li>
            </ul>
        <div class="clear-both"></div>
        </div>
    </div>
</div>

<?php require_once'footer-checkout.php';?>

