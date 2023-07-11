<?php require_once 'send-contact-details3.php'; ?>
<?php require_once 'header.php';?>

<div class="row">
    <div class="large-12 column">
        <div class="description">
            <h1>&lt;Contact info&gt;</h1>

            <form method="post" enctype="multipart/form-data">

                <div class="large-6 column collapse">
                    <fieldset>
                        <legend>Fill your details</legend>
                        <?php
                        if ($error != '' && $isMessage == 1) {
                            echo '<div class="alert-box ' . $type . '">' . $error . '</div>';
                        }
                        ?>
                        <label for="name">Name<span class="mandatory">*</span> <input type="text" name="name" id="name" placeholder="Type your name" minlength="2" value="<?php echo $name; ?>"></label>
                        <label for="phone">Mobile<span class="mandatory">*</span> <input type="tel" id="phone"   name="phone"   placeholder="Type your Contact Nno"   value="<?php echo $phone; ?>" required>
                        </label>
                        <label for="email">E-mail<span class="mandatory">*</span><input type="email" id="email"  name="email"  placeholder="Type your e-mail id"  value="<?php echo $email;?>" required>
                        </label>
                        <label for="purpose">Purpose to Contact <span class="mandatory">*</span>
                            <textarea id="purpose" name="purpose2contact" placeholder="Type your Region that's why you want to contact me"><?php echo $purpose2contact; ?></textarea> </label>
                        <label for="purpose">Optional Attachment <input type="file" value="Attache" name="fileAttahcment"></label>
                        <input type="submit" name="submit" value="Send" class="tiny button radius">
                        <input type="reset" value="Reset" class="tiny button radius">
                    </fieldset>
                </div>
                <div class="large-6 column collapse left">
                    <fieldset>
                        <legend>Mobile/E-mail</legend>
                        <div class="row collapse">
                            <div class="small-3 columns"><span class="prefix">Mobile 1 :</span></div>
                            <div class="small-9 columns"><span class="postfix"><a href="tel:+91-9873047383">+91-9873047383 </a></span></div>
                        </div>
                        <div class="clearfix pd-5"></div>
                        <div class="row collapse">
                            <div class="small-3 columns"><span class="prefix">Mobile 2 :</span></div>
                            <div class="small-9 columns"><span class="postfix"><a href="tel:+91-9015453168">+91-9015453168</a></span>
                            </div>
                        </div>
                        <div class="clearfix pd-5"></div>
                        <div class="row collapse">
                            <div class="small-3 columns"><span class="prefix">E-mail :</span></div>
                            <div class="small-9 columns"><span class="postfix"><a href="mailto:mukesh84tech@gmail.com">mukesh84tech@gmail.com</a></span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Social Contacts</legend>
                        <ul class="no-bullet inline-list">
                            <li><a href="http://in.linkedin.com/in/mukesh84tech" target="_blank"
                                   class="step fi-social-linkedin size-36"><span class="font-13">linkedin</span></a>
                            </li>
                            <li><a href="https://www.facebook.com/mukesh84tech" target="_blank"
                                   class="step fi-social-facebook size-36"> <span class="font-13">facebook</span></a>
                            </li>
                        </ul>
                    </fieldset>

                </div>

            </form>
            <div class="clearfix"></div>
            <h1>&lt;/Contact info&gt;</h1>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
