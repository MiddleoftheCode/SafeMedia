<?php

$servername = "localhost";
$username = "awasthim_omar";
$password = "_7dWDq+Fq&0&";
$connectioninfo = "awasthim_safemedia";

$conn = new mysqli($servername, $username, $password, $connectioninfo);

if($conn->connect_error) 
{
         header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/signup.html");
}


$email = $_POST["email"];
$name = $_POST["name"];
$pass = $_POST["password"];
$username = $_POST["username"];
$address = $_POST["address"];
$ph = $_POST["phone"];

$sql = "INSERT INTO account (Name, Email, Username, Password, phnum, address) VALUES ('$name', '$email', '$username', '$pass', '$ph', '$address')";


if ($conn->query($sql) === TRUE) {
    mkdir ("Users/$_POST[username]");
    chmod("Users/$_POST[username]", 755);
    mkdir ("Users/$_POST[username]/Presentations");
    chmod("Users/$_POST[username]/Presentations", 755);
     mkdir ("Users/$_POST[username]/Questions");
     chmod("Users/$_POST[username]/Questions", 755);
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/index.php");
    die();
    
} else {
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/signup.php");
    die();
}

$conn->close();

?>