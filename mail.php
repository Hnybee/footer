<?php

 include 'connect.php';


 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
// Function to send email using SMTP
function sendEmail($email) {
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dominionoyinkansola@gmail.com';
        $mail->Password = 'vuvlzxvassgxrdvh';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // add your gmail here instead of mine so whenn they subcribe they willl be getting a email from you letting them know the subscribtion was successful
        $mail->setFrom('dominionoyinkansola@gmail.com', 'book');
        $mail->addAddress($email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Newsletter Subscription Confirmation';
        $mail->Body    = 'Thank you for subscribing to our newsletter!';

        $mail->send();
        echo 
        header("location: success.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query = "INSERT INTO subscriber_table (email) VALUES ('$email')";
                mysqli_query($conn,$query);
        sendEmail($email);
    } else {
        echo 
        'Invalid email address';
    }
} else {
    echo 'Error: Invalid request';
}
