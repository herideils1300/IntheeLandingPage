<?php

$email_variable = $_POST["email"];
$flag = $_POST["flag"];

mail(
       $email_variable,
       "Welcome to Inthee",
       ($flag == "dev") ? "
       Dear developer!

       Thank you for joining the Inthee community.
       We are glad to have you in our team of developers.

       For now, you can chill...

       We will let you know when the site launches.

       Kind regards...

       The Inthee team...
       " : "
       Dear gamer!

       Thank you for joining the Inthee community.
       We are glad to have you in our team of developers.

       We will let you know when the site launches.
       When it does you will get your code for one free game you can use in our service.

       Until then, we kindly regard you and wish you the best.

       Yours truly...
       The Inthee team.
       "
);

header('Location: '.'http://localhost/form/confirmation/');
die();
