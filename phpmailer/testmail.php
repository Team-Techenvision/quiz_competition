<?php 
require("sendemail.php");
require("mail-instruction.php");

$name = 'Vinayak';
$rcpt= 'fortestingpurpose05@gmail.com';
$sub= 'Working of php mailer';
$msg= $msg_instregistered;
$msg = str_replace('[[SellerName]]', $name, $msg);


if ( sendemail($rcpt, $sub, $msg) ) {
	echo "mail send success";
} else {
	echo "Error";
}


?>