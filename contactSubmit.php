<?php
  $myemail = 'contact@nedim.info';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $estimate = $_POST['estimate'];

    $to = $myemail;
    $email_subject = "Boskom Garage Contact/Estimate submission from $name";
    $email_body = "You have received a new message. \n\n".
    "Here are the details:\nName: $name\nPhone: $phone\n".
    "Email: $mailFrom\n\nMessage:\n $message\n\nEstimate: $estimate";
    $headers = "From: $mailFrom";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.php?mailsend");
    $message = 'Submitted Succesfully.';
  } else {
    echo 'Something went wrong';
  }
?>
