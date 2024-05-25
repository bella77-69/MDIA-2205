<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Handle Feedback Form</title>
</head>

<body>
    
<?php
    
// Receive form data
$name = $_POST['feedback_name'];
$email = $_POST['feedback_email'];
$rating = $_POST['feedback_rating'];
$comments = $_POST['feedback_comments'];

// Set up email parameters
$recipient = "mrspasceri@hotmail.com"; // Replace with your email address
$subject = "Feedback from Slapshot Fantasy Website";
$message = "Hi there. The user $name just submitted feedback.\n";
$message .= "Email: $email\n";
$message .= "Rating: $rating\n";
$message .= "Comments:\n$comments";

//mail function
mail($recipient, $subject, $message);

// Display confirmation message
print "<p>Thank you, $name, for your feedback. We appreciate your input!</p>";

?>

</body>
</html>
