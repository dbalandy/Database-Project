<?php

 session_start();

$servername = "localhost";
$username = "id2425621_turki";
$password = "turki123";

// Create connection
$database_name = "id2425621_login";
$conn = mysqli_connect($servername, $username, $password, $database_name);
if (!$conn) {
    die(mysqli_error($conn));
}
if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $query = mysqli_query($conn, "SELECT * FROM mylogin WHERE username='$username' and password='$password'");
   if (mysqli_num_rows($query) != 0){
       header("location: welcome.php");


    } else {
       echo "invalid username or password";
    }
}

?>