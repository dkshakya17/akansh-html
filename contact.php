<?php
    if (isset($_POST["submit"]))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'contact-form'; 
        $to = 'info@akanshconsulting.com'; 
        $subject = 'Message from Contact Demo ';

        $body ="From: $name\n E-Mail: $email\n Message:\n $message";
        // Check if name has been entered
        if (!$_POST['name'])
        {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message'])
        {
            $errMessage = 'Please enter your message';
        }
       
    }
?>