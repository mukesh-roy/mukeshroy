<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $purpose2contact = $_POST['purpose2contact'];

    // Validate form data
    $error = '';
    if (trim($name) === '') {
        $error = 'Please enter your name.';
    } elseif (!preg_match('/[0-9]+/', $phone)) {
        $error = 'Please enter a valid phone number.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (trim($purpose2contact) === '') {
        $error = 'Please enter the purpose of contact.';
    }

    if (empty($error)) {
        // Prepare email content
        $to = 'mukesh84tech@gmail.com';
        $subject = 'Contact Details [from my portfolio]';
        $message = "Name: $name\n";
        $message .= "Phone: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Purpose of Contact: $purpose2contact\n";

        // Optional file attachment
        if (isset($_FILES['fileAttachment']) && $_FILES['fileAttachment']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['fileAttachment']['tmp_name'];
            $filename = $_FILES['fileAttachment']['name'];
            $message .= "\nAttached File: $filename";
        }

        // Send email
        $headers = "From: portfolioRequest@mukeshroy.com\r\n";
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            header("Location: thanks.php");
            exit();
        } else {
            //message-failed-thanks.php
            //$error = 'Failed to send the email. Please try again later.';
            header("Location: message-failed-thanks.php");
        }
    }
} else {
    // Set initial form values
    $name = '';
    $phone = '';
    $email = '';
    $purpose2contact = '';
}
?>

<!-- Add your HTML form here -->

<?php
// Display error message if there is any
if (!empty($error)) {
    echo '<div class="alert-box alert">' . $error . '</div>';
}
?>
