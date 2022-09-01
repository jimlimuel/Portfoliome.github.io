<?php
$connection = mysqli_connect('localhost','root','');

mysqli_select_db($connection,"portofoliodb");

$user = $_POST['user'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$query = "INSERT INTO `messagetb`(`user`,`email`,`number`,`message`) VALUES ('$user','$email','$number','$message') ";

mysqli_query($connection,$query);


header('Location: home.php');
echo"Thanks"
?>
