<?php

// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$inputMessage=$_POST['inputMessage'];

$to = "ashwath.anand.22@gmail.com";
$subject = "    ";
$message = " Name: " . $name . "\r\n email: " . $email . "\r\n subject: " . $subject . "\r\n inputMessage: " . $inputMessage;


$from = "Ashwath Anand";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://ashwathanand.com/contact/success.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}



?>
