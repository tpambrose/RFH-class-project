<?php
require("connection.php");
if(isset($_POST['sendMessage']))
{
    $to = "shejaemeric2@gmail.com";
    $subject = $_REQUEST['from'];
    $txt = $_REQUEST['msg'];
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <'.$_REQUEST['email'].'>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    mail($to,$subject,$txt,$headers);
}
?>