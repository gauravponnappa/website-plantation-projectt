<?php 
$name= $_POST["uname"];
$mail= $_POST["mail"]; 

$phone=$_POST["phone"];

$chkin=$_POST["chkin"];
$chkout=$_POST["chkout"];

$msg = $name."\n".$mail."\n".$phone."\n".$phone."\n".$chkin."\n".$chkout;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("gauravz4833@gmail.com","My subject",$msg);
?>
