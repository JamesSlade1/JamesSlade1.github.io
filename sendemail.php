<?php
$to = "j.slade@students.mueller.qld.edu.au";
$subject = "Subject subject";
$txt = "It works";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
