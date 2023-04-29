<?php
  $conn=mysqli_connect('localhost','root','hunger',);
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Message = $_POST['Message'];

$host = 'local host';
$user = 'root';
$pass = '';
$dbname = 'hunger';

$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO hunger(Name,Email,Contact,Subject,Message) values('$Name', '$Email', '$Contact', '$Subject', '$Message') ";
mysqli_query($conn,$sql);
?>