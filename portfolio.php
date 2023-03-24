<?php
  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Format the email message
  $subject = 'New form submission from ' . $name;
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  mail('laura@laura-otoole.com', $subject, $body);
?>
