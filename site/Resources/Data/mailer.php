<?php

    $Name = strip_tags(trim($_POST["Name"]));
    $Name = str_replace(array("\r","\n"),array(" "," "),$name);
    $Email = filter_var(trim($_POST["Email"]), FILTER_SANITIZE_EMAIL);
    $Message = trim($_POST["Message"]);

    if(empty($Name) or empty($Message) or !filter_var($Email, FILTER_VALIDATE_EMAIL)){
        header("Location: #");
        exit;
    }

    $recipient = "a@ab.co"

    $subject = "New contact from $Name";

    $Email_content = "Name: $Name\n";
    $Email_content .="E-mail: $Email\n\n";
    $Email_content .= "Message:\n$Message\n";

    $Email_headers = "From: $Name <$Email>";

    mail($recipient, $subject, $Email_content, $Email_headers)

    header("Location: #");
?>