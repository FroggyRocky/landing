
<?php
if (isset($_POST['submit'])) {
	# code...
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$mailfrom = $_POST['mail'];

$mailto ="!--put email--";
$headers = "From: ".$mailfrom;
mail($mailto, $subject, $headers);
header ("Location: index.html?mailsend");
}
?php>