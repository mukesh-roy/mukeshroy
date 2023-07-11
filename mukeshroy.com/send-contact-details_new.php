<?php require_once 'header.php'; ?>
<?php
require_once('PHPMailer_v5.1/class.phpmailer.php');
$error = '';
$isMessage = 0;

$subj = 'Portfolio Request';
$to = 'mukesh84tech@gmail.com';
$from = 'no-reply@mukeshroy.com';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$thankyou = ''; //"thanks.php";
$filename = '';
$filetmpname = '';
if(isset($_FILES['fileAttahcment']['name']) && $_FILES['fileAttahcment']['name'] != ''){
    $timeNow = time();
    $filename = 'requestFile/' . $timeNow . strtolower(str_replace(' ', '_', $_FILES['fileAttahcment']['name']));
    $filetmpname = $_FILES['fileAttahcment']['tmp_name'];
}

move_uploaded_file($filetmpname, $filename);

$msg = '';
$msg .= 'Name : ' . $name . '<br>';
$msg .= 'Phone : ' . $phone . '<br>';
$msg .= 'Email : ' . $email . '<br>';
smtpmailer($to, $from, $name, $subj, $msg, $filename);

function smtpmailer($to, $from, $from_name = 'www.mukeshroy.com', $subject, $body, $filename, $is_gmail = true)
{
    global $error;
    $mail = new PHPMailer();

    //$mail->Host       = "www.mukeshroy.com";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

   $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;


    $mail->Username = 'mukesh84tech@gmail.com';
    $mail->Password = 'nityomukesh1984';


    $mail->IsHTML(true);
    $mail->From = "admin@www.mukeshroy.com";
    $mail->FromName = "www.mukeshroy.com";
    $mail->Sender = $from; // indicates ReturnPath header
    $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
//        $mail->AddCC('cc@phpgang.com.com', 'CC: to phpgang.com');
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if($filename != ''){
        $mail->AddAttachment($filename); // $path: is your file path which you want to attach like $path = "reload.png";
    }
    if (!$mail->Send()) {
        //$error = 'Mail error: ' . $mail->ErrorInfo;
        return;// $error;
    } else {
        $isMessage = 1;
        //$error = 'Message sent!';
        return; // $error;
        // header("location: $thankyou");
    }
}

?>
<!--<meta http-equiv="refresh" content="5;URL=curriculum-vitae.php">-->
<div class="row">
    <div class="large-12 column">
        <div class="description">
            <h1>&lt;Thank you&gt;</h1>
            <?php
            if ($error != '' && $isMessage == 1) {
                echo '<div class="alert-box ' . $type . '">' . $error . '</div>';
            } else {
                echo 'Your submition has been recived, I&lsquo;ll responce to your request shortly, in the mean time.';
            }
            ?>
            <div class="clearfix"></div>
            <h1>&lt;/Thank you&gt;</h1>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
