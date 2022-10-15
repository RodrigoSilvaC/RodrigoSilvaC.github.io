<?php
 if(isset($_POST['Send Message']))
{
    $to = "rodrigo.silva.casarrubias@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $first_name = $_POST['Name'];
    $subject = "Form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
