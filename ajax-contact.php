<?php
$toEmail = "adyl@ik.me";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["message"], $_POST["message"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>
