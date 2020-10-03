<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "form_login";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$Username=$_POST['Username'];
$Password=$_POST['Password'];

$Username = stripcslashes('Username');
$Password = stripcslashes('Password');

$sql="SELECT * FROM users WHERE user = '$Username' AND password = '$Password'";

if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
else {
    die ("Failed to query database!! ");
}


if($row['user']==$Username && $row['password']== $Password){
    echo "Login Successfull -> Welcome ".$row['user'];
}
else{
    echo"Failed login try again";
}
?>