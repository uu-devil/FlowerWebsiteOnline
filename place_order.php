<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'clothes');

$name = $_POST['name'];
$email_id = $_POST['email_id'];
$mobile_no = $_POST['mobile_no'];
$address = $_POST['address'];

$query = " insert into place_order (name, email, mobile_no, address)
values ('$name','$email_id','$mobile_no','$address')";

mysqli_query($con, $query);

header('location:Ghost.html');
?>