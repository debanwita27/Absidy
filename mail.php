<?php
if(isset( $_POST['txt_name']))
$txt_name = $_POST['txt_name'];
if(isset( $_POST['txt_email']))
$txt_email = $_POST['txt_email'];
if(isset( $_POST['txt_phone']))
$txt_phone = $_POST['txt_phone'];
if(isset( $_POST['txt_subject']))
$txt_subject = $_POST['txt_subject'];
if(isset( $_POST['txt_message']))
$txt_message = $_POST['txt_message'];


$content="From: $txt_name \n Email: $txt_email \n Phone no: $txt_phone \n Message: $txt_message";
$recipient = "debanwitamahato27@gmail.com";
$mailheader = "From: $txt_email \r\n";
mail($recipient, $txt_subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>