<?php
if(isset($_POST['submit'])){
    $to = "sara@ideometry.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . "wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message" . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you." . $first_name . ", we will contact you shortly.";
    // header('Location: thank_you.php');
    }
?>