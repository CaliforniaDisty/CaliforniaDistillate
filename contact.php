<?php
if(isset($_POST[submit]))
{
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$to = "josegsanc@gmail.com";
$message = "New Message";

mail ($to, $message, $subject, "From: " . $name . $number);
echo "Success!";
}
 ?>
