<?php
/*ob_start();
$error = '';
if ($_POST) {
    $to = "mukesh84tech@gmail.com";
    $subject = "Contact detail [from my portfolio]";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
//$fromUser = 'From:'.$_POST['email];
    $fromUser = 'From:portfolioRequest@mukeshroy.com';
    $purpose2contact = $_POST['purpose2contact'];
    $thankyou = "thanks.php";
    $body = "";
    $body .= "Name : $name<br><br>";
    $body .= "Phone: $phone <br><br>";
    $body .= "Email: $email<br><br>";
    $body .= "Purpopse of Contact: $purpose2contact";

    $isMessage = 0;
    $type = 'success';

    $allowed_filetypes = array('pdf', 'doc', 'docx');
    $max_filesize = 524288;
    $upload_path = 'requestFile/';
    $filename = $_FILES['fileAttahcment']['name'];
    $fileExtantion = array_pop(explode('.', $filename));
    $ext = strtolower($fileExtantion);

    if (trim($name) == '') {
        $error = 'Please Enter Your Name.';
    } else if (!preg_match('/[0-9]+/', $phone)) {
        $error = 'Please enter your phone no.';
    } else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $email)) {
        $error = 'Please enter valid Email.';
    } else if (trim($purpose2contact) == '') {
        $error = 'Please enter your purpopse of Contact.';
    }

    if ($filename && $error == '') {
        if (in_array($ext, $allowed_filetypes)) {
            if (filesize($_FILES['fileAttahcment']['tmp_name']) > $max_filesize)
                $error = 'The file you attempted to upload is too large.';
            if (!is_writable($upload_path))
                $error = 'You cannot upload to the specified directory, please contact to site admin to CHMOD it to 777.';
            if (move_uploaded_file($_FILES['fileAttahcment']['tmp_name'], $upload_path . $filename))
                $body .= '<br><br><a href="http://www.mukeshroy.com/' . $upload_path . $filename . '">Attachement</a>';
            //$error = 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>'; // It worked.
            else
                $error = 'There was an error during the file upload.  Please try again.'; // It failed
        } else {
            $error = 'Invalid file type, Allowed are ' . implode(',', $allowed_filetypes); // It failed
        }


    }



    if ($error == '') {
        $isMessage = 1;
        $headers .= "from: mukesh84tech@gmail.com\r\n";
        $headers  .= 'X-Mailer: PHP/' . phpversion() . "\r\n" .
            'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
            'MIME-Version: 1.0'."\r\n\r\n";
        mail('mukesh84tech@gmail.com', $subject, $body,$headers);
        $error = 'Your submition has been recived, I willll responce to your request shortly, in the mean time.';
        header("location: $thankyou");
    } else if ($error != '') {
        $type = 'alert';
        $isMessage = 1;
    }

}else{
    $name = '';
    $phone ='';
    $email = '';
    $purpose2contact = '';
}*/
?>

<?php
ob_start();
$error = '';
$isMessage = 0;
$upload_name = $_FILES["upload"]["name"];
$filename = $upload_name;
$upload_type = $_FILES["upload"]["type"];
$upload_size = $_FILES["upload"]["size"];
$upload_temp = $_FILES["upload"]["tmp_name"];
$subject = 'Portfolio Request';
$to = 'mukesh84tech@gmail.com';

$message .= $_POST['name'] . '<br><br>';
$message .= $_POST['phone'] . '<br><br>';
$message .= $_POST['email'] . '<br><br>';
$message .= $_POST['purpose2contact'] . '<br><br>';
//$fromUser = 'From:'.$_POST['email];
$thankyou = "thanks.php";

if ($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $purpose2contact = $_POST['purpose2contact'];
    if (trim($name)=='') {
        $error = 'Please Enter Your Name.';
    } else if (!preg_match('/[0-9]+/', $phone)) {
        $error = 'Please enter your phone no.';
    } else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $email)) {
        $error = 'Please enter valid Email.';
    } else if (trim($purpose2contact) == '') {
        $error = 'Please enter your purpopse of Contact.';
    } else if ($filename && $error == '') {
        $fp = fopen($upload_temp, "rb");
        $file = fread($fp, $upload_size);
        $file = chunk_split(base64_encode($file));
        $num = md5(time());
    } else {
        //Normal headers

        $headers = "From: portfolio<request@mukeshroy.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; ";
        $headers .= "boundary=" . $num . "\r\n";
        $headers .= "--$num\r\n";

        // This two steps to help avoid spam

        $headers .= "Message-ID: <" . gettimeofday() . " TheSystem@" . $_SERVER['SERVER_NAME'] . ">\r\n";
        $headers .= "X-Mailer: PHP v" . phpversion() . "\r\n";

        // With message

        $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\r\n";
        $headers .= "" . $message . "\n";
        $headers .= "--" . $num . "\n";

        if ($filename && $error == '') {
            // Attachment headers

            $headers .= "Content-Type:" . $upload_type . " ";
            $headers .= "name=\"" . $upload_name . "\"r\n";
            $headers .= "Content-Transfer-Encoding: base64\r\n";
            $headers .= "Content-Disposition: attachment; ";
            $headers .= "filename=\"" . $upload_name . "\"\r\n\n";
            $headers .= "" . $file . "\r\n";
            $headers .= "--" . $num . "--";
        }
        // SEND MAIL
        @mail($to, $subject, $message, $headers);
        if ($filename && $error == '') {
            fclose($fp);
        }
        //header("location: $thankyou");
    }


} else {
    $name = '';
    $phone = '';
    $email = '';
    $purpose2contact = '';
}
;
?>
<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">


        <form id="attach" name="attach" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"
              enctype="multipart/form-data">
            <fieldset>
                <legend>Fill your details</legend>
                <?php
                if ($error != '' && $isMessage == 1) {
                    echo '<div class="alert-box ' . $type . '">' . $error . '</div>';
                }
                ?>
                <label for="name">Name<span class="mandatory">*</span> <input type="text" name="name" id="name"
                                                                              placeholder="Type your name" minlength="2"
                                                                              value="<?php echo $name; ?>"></label>
                <label for="phone">Mobile<span class="mandatory">*</span> <input type="tel" id="phone" name="phone"
                                                                                 placeholder="Type your Contact Nno"
                                                                                 value="<?php echo $phone; ?>">
                </label>
                <label for="email">E-mail<span class="mandatory">*</span><input type="text" id="email" name="email"
                                                                                placeholder="Type your e-mail id"
                                                                                value="<?php echo $email; ?>">
                </label>
                <label for="purpose">Purpose to Contact <span class="mandatory">*</span>
                    <textarea id="purpose" name="purpose2contact"
                              placeholder="Type your Region that's why you want to contact me"><?php echo $purpose2contact; ?></textarea>
                </label>
                <label for="purpose">Optional Attachment <input type="file" value="Attache" name="upload"
                                                                id="upload"></label>
                <input type="submit" name="submit" value="Send" class="tiny button radius">
                <input type="reset" value="Reset" class="tiny button radius">
            </fieldset>
        </form>

    </div></div>
<?php //require_once 'footer.php'; ?>