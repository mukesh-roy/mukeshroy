<?php
ob_start();
$to = "mukesh84tech@gmail.com";
$subject = "Contact detail [from my portfolio]";

$name = $_POST[name];
$phone = $_POST[phone];
$email = $_POST[email];
//$fromUser = 'From:'.$_POST[email];
$fromUser = 'From:portfolioRequest@mukeshroy.com';
$purpose2contact = $_POST[purpose2contact];
$thankyou="thanks.php";

$body.="Name : $name\n";
$body.="Phone: $phone\n";
$body.="Email: $email\n";
$body.="Purpopse of Contact: $purpose2contact\n";
$error='';
//$body .= "This is only a test.";

if($_POST) {
    if (trim($name)==''){
        $error='Please Enter Your Name.';
    }
    if (!preg_match('/[0-9]+/', $phone)) {
        $error = 'Please enter your phone no.';
    }

    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $email)) {
        $error = 'Please enter valid Email.';
    }
    if (trim($purpose2contact)=='') {
        $error = 'Please enter your purpopse of Contact.';
    }
}
echo '============'.$purpose2contact.$error;
if($error==''){
    $headers = "From: mukesh84tech@gmail.com\r\n".
        "Reply-To: mukesh84tech@gmail.com\r\n";
//$cc = null;
//$bcc = null;
    $return_path = "mukesh84tech@gmail.com";
//$a = imap_mail($to, $subject, $body, $headers, $cc, $bcc, $return_path);
    mail('mukesh84tech@gmail.com',$subject,$body,$fromUser);
    header ("location: $thankyou");

}

?>