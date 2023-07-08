<?php require_once 'header-cart.php'; ?>



    <div class="row clearfix">
        <div class="large-12 column">
            <h5>Choose Payment Method</h5>
        </div>

        <div class="large-3 column checkout-page">
            <ul class="no-bullet mg-0 pd-0 payment-method side-nav">
                <li><a href="#paypal" class="active">Pay by PayPal <span class="pd-list-arrow"></span></a></li>
                <li><a href="#check-dd">Cheque / D.D. <span class="pd-list-arrow"></span></a></a></li>
                <li><a href="#net-banking" class="disabled">Net Banking <span class="pd-list-arrow"></span></a></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="large-9 column font-13">
            <div id="paypal" class="lblca checkout-page-content">
                <h5>PAY by PayPal </h5>
                <hr>
                Please make your payment through PayPal by clicking on the button below.<br><br>
                <a href="checkout-success.php" class="button small radius">Pay Now</a><br>
                Please write to <a href="mailto:admin@bhavyam.net">admin@bhavyam.net</a> in case of
                difficulties.<br><br>
                By placing the order, you have read and agree to www.My Career Upgrae.com terms of service, and Privacy
                Policy.
            </div>
            <div id="check-dd" class="lblca checkout-page-content hide">
                <h5>PAY by Cheque / D.D. </h5>
                <hr>
                Please make your payment through Cheque by clicking on the button below.<br><br>
                <a href="checkout-success.php" class="button small radius">Pay Now</a><br>
                Please write to <a href="mailto:admin@bhavyam.net">admin@bhavyam.net</a> in case of
                difficulties.<br><br>
                By placing the order, you have read and agree to www.My Career Upgrae.com terms of service, and Privacy
                Policy.
            </div>
            <div id="net-banking" class="lblca checkout-page-content hide">
                <h5>PAY by Net Banking </h5>
                <hr>
                You can transfer the payment via online to us:<br><br>

                Coming Soon<br><br>

                Note:<br>
                Please send a confirmation of the online transfer to admin@bhavyam.net. Your course registration will be
                final only after we receive the confirmation of the online transfer.<br><br>

                By placing the order, you have read and agree to My Career Upgrae.com Terms of Use, and Privacy Policy.
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="large-12 column pb-0">
            <div class="large-12 column sober-bg pt-10">Your order summary</div>
        </div>


        <div class="large-12 column">
            <div class="cart-row relative">

                <div class="large-6 column">
                    Certified Associate Project Management (CAPM) Certification<br>
                    Category : CAPM<br>
                    Duration - N/A Days
                </div>
                <div class="large-2 small-6 column pb-0">
                    <div class="row collapse">
                        <div class="small-6 large-6 column pb-0">
                            <span class="prefix">Quantity</span>
                        </div>
                        <div class="small-6 large-6 column pb-0">
                            <input disabled type="text" value="1" class="quantity">
                        </div>
                    </div>
                </div>
                <div class="large-4 small-6 column  pb-0">
                    <div class="row collapse">
                        <div class="small-6 large-6 column  pb-0">
                            <span class="prefix">Total Cost (<span>INR</span>)</span>
                        </div>
                        <div class="small-6 large-6 column  pb-0">
                            <input disabled type="text" value="300" class="total">
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
<?php require_once 'footer-cart.php'; ?>
