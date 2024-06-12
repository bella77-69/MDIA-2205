<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Handle Create Team Form</title>
</head>

<body>

    <?php

    // Receive form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $comments = $_POST['comments'];

    // variables to display in the email message
    $recipient = "mrspasceri@hotmail.com";
    $message = "Hi there. The user {$name} just signed up and created their hockey fantasy team. The return email is {$email} and they selected {$username} as their username.";
    $comments = "Here are some comments from the user: {$comments}";
    //mail function
    mail($recipient, $username, $message, $comments);

    // Display confirmation message
    print "<p>Thank you, $name, for creating your team. Good luck with your fantasy team!</p>";

    ?>

</body>

</html>