<?php
$mailto="mukesh84tech@gmail.com";
$subject="Request from www.mukeshroy.com[Contact Us Page]";
$thankyou="thanks.php";
$name = $_POST[name];
$phone = $_POST[phone];
$email = $_POST[email];
$purpose2contact = $_POST[purpose2contact];
$body.="-------------------------------------\n";
$body.="Name: $name\n";
$body.="Phone: $phone\n";
$body.="Email: $email\n\n";
$body.="Purpose to Contact: $purpose2contact\n\n";
$body.="-------------------------------------\n";
mail($mailto,$subject,$body,"From: $email\n");
Header ("Location: $thankyou");
?>

<?php
/*
 * PHP IMAP - Send an email using IMAP and save it to the Sent folder
 */

/*//for demo purposes we are gonna send an email to ourselves
$to = "mukesh84tech@gmail.com";
$subject = "Test Email";
$body = "This is only a test.";
$headers = "From: mukesh84tech@gmail.com\r\n".
    "Reply-To: mukesh84tech@gmail.com\r\n";
$cc = null;
$bcc = null;
$return_path = "mukesh84tech@gmail.com";
//send the email using IMAP
$a = imap_mail($to, $subject, $body, $headers, $cc, $bcc, $return_path);
echo "Email sent!<br />";

// connect to the email account
$mbox = imap_open("{imap.gmail.com:993/imap/ssl}", "mukesh84tech@gmail.com", "nityomukesh1984");

// save the sent email to your Sent folder by just passing a string composed
// of the entire message + headers.
// Notice the 'r' format for the date function, which formats the date correctly for messaging.

imap_append($mbox, "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail",
    "From: mukesh84tech@gmail.com\r\n".
    "To: ".$to."\r\n".
    "Subject: ".$subject."\r\n".
    "Date: ".date("r", strtotime("now"))."\r\n".
    "\r\n".
    $body.
    "\r\n"
);
echo "Message saved to Send folder!<br />";

// close mail connection.
imap_close($mbox);*/

?>
