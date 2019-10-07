<?php
session_start();


$servername = "localhost";
$username = "awasthim_omar";
$password = "_7dWDq+Fq&0&";
$connectioninfo = "awasthim_safemedia";

$conn = new mysqli($servername, $username, $password, $connectioninfo);

if($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
     "<br>";
}


$pass = $_POST["pass"];
$username = $_POST["user"];


$sql = "SELECT Username,Password FROM account WHERE Username = '$username' AND Password = '$pass';" ;

$result  = $conn->query($sql) or die($conn->error);


if ($result->num_rows > 0) {
    $_SESSION["user"]= $_POST["user"];
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/index.php");
    
    
} else {
    echo "Account not found please register";
}

$conn->close();




?>