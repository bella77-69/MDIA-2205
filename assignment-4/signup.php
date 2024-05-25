<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Handle Form Submission</title>
</head>

<body>
    
<?php
    
// Receive form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$preferences = isset($_POST['preference']) ? $_POST['preference'] : '';
$radioOption = isset($_POST['radio']) ? $_POST['radio'] : '';
$selection = $_POST['selection'];

// Set up email parameters
$to = "mrspasceri@hotmail.com";
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage:\n$message\n";

// Additional fields
$body .= "Preferences:\n";
if (!empty($preferences)) {
    foreach ($preferences as $preference) {
        $body .= "- $preference\n";
    }
} else {
    $body .= "- No preferences selected\n";
}

$body .= "Selected Radio Option: $radioOption\n";
$body .= "Selected Option from Dropdown: $selection";

// Send email
if (mail($to, $subject, $body)) {
    // Email sent successfully
    echo "<p>Thank you, $name, for your submission.</p>";
} else {
    // Error sending email
    echo "<p>There was a problem sending your message. Please try again later.</p>";
}

?>

</body>
</html>
