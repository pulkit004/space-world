<?php
  if((isset($_POST['name']) && !empty($_POST['name']))
  && (isset($_POST['email']) && !empty($_POST['email']))
  && (isset($_POST['contact']) && !empty($_POST['contact']))){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $message = $_POST['message'];
  
  $to = "pulkitverma004@gmail.com";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers = "From: " .($email) . "\r\n";


  if( mail($to, "You have recieved a new message.", $message, $headers)){
  header('refresh:3;url=index.php');
  echo "E-Mail Sent successfully, we will get back to you soon.";

  }
}
?>