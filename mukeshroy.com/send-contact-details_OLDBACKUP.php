<?php
ob_start();
$error = '';
    include_once 'smtp/SMTP.php';
    include_once 'smtp/PHPMailer.php';
    include_once 'smtp/mail.php';

if ($_POST) {
    $to = "mukesh84tech@gmail.com";
    $subject = "Contact detail [from my portfolio]";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fromUser = 'From:portfolioRequest@mukeshroy.com';
    $purpose2contact = $_POST['purpose2contact'];
    $thankyou = "thanks.php";
    $body = "";
    $body .= "Name : $name<br><br>";
    $body .= "Phone: $phone <br><br>";
    $body .= "Email: $email<br><br>";
    $body .= "Purpose of Contact: $purpose2contact";

    $isMessage = 0;
    $type = 'success';

    $allowed_filetypes = array('pdf', 'doc', 'docx');
    $max_filesize = 524288;
    $upload_path = 'requestFile/';
    $filename = $_FILES[fileAttahcment][name];

    if (trim($name) == '') {
        $error = 'Please Enter Your Name.';
    } else if (!preg_match('/[0-9]+/', $phone)) {
        $error = 'Please enter your phone no.';
    } else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $email)) {
        $error = 'Please enter valid Email.';
    } else if (trim($purpose2contact) == '') {
        $error = 'Please enter your purpopse of Contact.';
    }

    /*if ($filename && $error == '') {
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


    }*/

    if ($error == '') {
        $isMessage = 1;
        $headers .= "from: mukesh84tech@gmail.com\r\n";
        $headers  .= 'X-Mailer: PHP/' . phpversion() . "\r\n" .
                    'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
                    'MIME-Version: 1.0'."\r\n\r\n";
        $phpSmtpMail = new php_smtp_mail();

        $fileLocOrName = $upload_path . $filename;
        move_uploaded_file($_FILES['fileAttahcment']['tmp_name'], $fileLocOrName);
        echo $phpSmtpMail->sendMailSmtp('mukesh84tech@gmail.com', $body, $subject, $fileLocOrName);
        $error = 'Your submition has been recived, I willll responce to your request shortly, in the mean time.';
        unset($fileLocOrName);
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
}
?>