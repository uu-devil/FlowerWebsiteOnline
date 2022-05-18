<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'flower');

$email = $_POST['email'];
$pwd = $_POST['password'];

$q = " select * from sign_up where email_id = '$email' && password = '$pwd'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:Flower.html');
}
else{
    header('location:login.html');
}

?>