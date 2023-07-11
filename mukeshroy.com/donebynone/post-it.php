<?php require_once 'header.php'; ?>
<div class="clear"></div>
<style>
    .post-landing-bg {
        background: #b48f64 url(http://img.donebynone.com/all-images/images/post-it-landing-bg1.jpg) 0 0 repeat;
        padding: 20px 0;
        overflow-x: scroll;
    }

    .post-landing-graphics {
        width: 699px;
        height: 1600px;
        overflow: hidden;
        margin: 0 auto;
        clear: both;
    }

    .post-landing-graphics {
        background: url(http://www.responsive.donebynone.com/magento/skin/frontend/default/donebynone/images/post-landing-graphics-2.png) center 0 no-repeat;
    }

    .graphics-bg {
        background: url(http://img.donebynone.com/all-images/images/spacer.gif) 0 0 repeat;
    }

    .post-form {
        width: 224px;
        margin: 1186px auto 0 auto;
        padding-left: 70px;
    }

    .post-form ul, .post-form li {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .in-box1, .in-box2 {
        font: bold 14px/18px Tahoma, 'Trebucher Ms', Arial !important !important;
        color: #000 !important;
        resize: none;
        background: none !important;
        overflow: hidden;
        border: solid 1px #fff !important;
        box-shadow: none !important;
        border-radius: 6px !important;
    }

    .in-box1 {
        width: 140px;
        margin-bottom: 22px !important;
    }

    .in-box2 {
        width: 280px;
        height: 73px;
        overflow-y: auto;
    }

    input.error, textarea.error,post-it-button input.error[type="radio"] {
        background-color: #febcba !important;
        border-color: #c60f13 !important;
    }

    input.error:focus, textarea.error:focus {
        background: #ffe8e7 !important;
        box-shadow: 0 0 5px #999 !important;
    }

    .post-it-button {
        width: 227px;
        margin: 51px auto 0 auto;
        overflow: visible;
    }

    .post-it-button label {
        display: inline !important;
    }

    .post-yes, .post-no {
        border: 0;
        background: url("http://img.donebynone.com/all-images/images/post-button.png") 0 0 no-repeat;
        height: 31px;
        width: 33px;
        margin-right: 3px;
    }

    .post-it-button input {
        display: inline-block;
        vertical-align: middle;
    }

    .post-it-button input[type="radio"] {
        padding: 0 !important;
        height: auto !important;
        width: auto !important;
    }

    .post-submit-button {
        border: 0;
        background: url("http://img.donebynone.com/all-images/images/post-submit.png") 0 0 no-repeat;
        height: 34px;
        width: 116px;
        cursor: pointer;
    }

    .post-no {
        background-position: -33px 0;
    }

    .error-section {
        position: absolute;
        color: #fff !important;
        margin-top: 28px;
        background: red;
        border: solid 1px darkred;
        padding:3px 10px;

    }

    .popUpFancyBox2 {
        top: 13%;
        width: 730px;
    }

    .close-reveal-modal {
        position: relative !important;
        top: 0 !important;
        right: 0 !important;
    }

    @media only screen and (max-width: 768px) {
        .post-landing-graphics {
            width: auto;
        }

        .post-form {

        }
    }
</style>
<div class="row">
    <div class="large-12 column">
        <div class="post-landing-bg">
            <div class="post-landing-graphics">
                <form method="post" name="form1" action="">
                    <div class="graphics-bg">
                        <div class="post-form">
                            <ul>
                                <li>
                                    <div class="error-section hide" id="name-error" >Please insert a
                                        valid name...
                                    </div>
                                    <input type="text" id="name" class="in-box1" name="name" tabindex="1">
                                </li>
                                <li>
                                    <div class="error-section hide" id="email-error" >Please insert
                                        a valid email....
                                    </div>
                                    <input type="email" id="emailid" class="in-box1" name="email" tabindex="2"></li>
                                <li>
                                    <div class="error-section hide" id="age-error" >Please insert a
                                        valid age.....
                                    </div>
                                    <input type="text" id="age" class="in-box1" name="age" tabindex="3"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <div class="post-it-button">
                            <div class="error-section hide" id="checkbox-error" >Check box checked
                                is mandatory
                            </div>
                            <label for="yes"><input type="radio" name="post-radio" class="post-yes" value="1"
                                                    id="yes" tabindex="4"> <input type="button" class="post-yes"
                                                                                  value="."></label> &nbsp;&nbsp;&nbsp;&nbsp;
                            <label for="no"><input type="radio" name="post-radio" class="post-no" value="0" id="no"
                                                   tabindex="5"/><input type="button" class="post-no"
                                                                        value="."/></label>

                            <div class="clear" style="height:33px;"></div>
                            <textarea class="in-box2" rows="4" cols="10" id="comment" name="postcomment"
                                      tabindex="6"></textarea>

                            <div class="clear" style="height:17px;"></div>
                            <div class="textRight" style="width:285px;">
                                <input type="button" class="post-submit-button" onclick="sliceoflife()" value="."
                                       tabindex="7" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="popUpFancyBox2 popUpFancyBox" id="story_success" style="display:none"><a
                href="http://www.donebynone.com"><img id="story_image"
                                                      src="http://img.donebynone.com/all-images/images/thank-you.jpg"/></a>
        </div>
    </div>
</div>
<!--post-it-thankyou -->
<div id="post-it-thankyou" class="reveal-modal medium no-pd">
    <a href="javascript:void(0);" class="close-reveal-modal">
        <img src="images/post-it-thank-you-2.jpg" border="0">
    </a>

</div>
<?php require_once 'footer.php'; ?>
