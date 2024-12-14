<?php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['emailid']);
    $message = htmlspecialchars($_POST['msg']);

    $to = "sales@travelbookingwala.com"; // Replace with the recipient's email address
    $subject = "New Enquiry from Website";

    $body = "You have received a new enquiry:\n\n";
    $body .= "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your enquiry has been sent successfully.";
    } else {
        echo "There was an error sending your enquiry. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
