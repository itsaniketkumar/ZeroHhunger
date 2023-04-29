<?php
  $conn=mysqli_connect('localhost','root','hunger',);
$name = $_POST['Name'];
$email = $_POST['Email'];
$contact = $_POST['Contact'];
$message = $_POST['Message'];

$host = 'local host';
$user = 'root';
$pass = '';
$dbname = 'hunger';

$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO hunger(Name,Email,Contact,Subject,Message) values('$Name', '$Email', '$Contact', '$Subject', '$Message') ";
mysqli_query($conn,$sql);
?>