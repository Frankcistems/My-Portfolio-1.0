<?PHP
  // form handler

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

   $to = "frankcistems@gmail.com";
      $email_subject = "Contact from website";
      $email_body = "User Name: $name.\n"."User Email: $email.\n"."User Message: $message.\n";

      $headers = "From: Frankcistems@github" . "\r\n";
      $headers .= "Reply to: $email \r\n";
      mail($to, $email_subject, $email_body, $headers);
      
?>