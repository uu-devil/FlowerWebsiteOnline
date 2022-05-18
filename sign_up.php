<?php
$con = mysqli_connect('localhost','root');

if($con)
{
    echo"Connection successful";
}
else{
    echo"No Connection";
}

mysqli_select_db($con,'flower');

$name = $_POST['name'];
$mobile_no = $_POST['mobile_no'];
$email_id = $_POST['email_id'];
$pwd = $_POST['password'];

$query = " insert into sign_up (name, mobile_no, email_id, password)
values ('$name','$mobile_no','$email_id','$pwd')";

echo "$query";

mysqli_query($con, $query);

header('location:login.html');
?>