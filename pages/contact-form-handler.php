<?php
if (isset($_POST['submit'])) {

$name = $_POST['name'];
$phone = $_POST['phone'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "Stefan@worldcasinodirectory.com";
$headers = "From: ".$mailFrom;
$txt = " Kupac: ".$name.".\n Broj Telefona:".$phone.".\n\n Poruka:".$message;

mail ($mailTo, $phone, $txt, $headers);
header ('Location: gnezdo-za-bebe.html');
}

// $email_from = 'stefanjv90@gmail.com';
//
// $email_subject = "Nova Poruka od Kupca";
//
// $email_body = "Kupac : $name.\n".
//               "Broj Telefona: $phone.\n"
//               "E-mail Kupca: $visitor_email.\n"
//               "Poruka Kupca: $message.\n"
//
// $to = "jasminaj1402@gmail.com ";
// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n"
// mail($to,$email_subject,$email_body,$headers);
//
// header("Location: index.html");

 ?>
