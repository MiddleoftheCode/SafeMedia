<?php

session_start();

$servername = "localhost";
$username = "awasthim_omar";
$password = "_7dWDq+Fq&0&";
$connectioninfo = "awasthim_safemedia";

$conn = new mysqli($servername, $username, $password, $connectioninfo);

if($conn->connect_error) 
{
         header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/signup.html");
}
$username = $_SESSION['user'];

$target_path = "Users/" . $username . "/Presentations/" ;
$target_file = $target_path.basename( $_FILES["presentationFile"]["name"]);

$file = basename($target_file);


if (move_uploaded_file($_FILES["presentationFile"]["tmp_name"], $target_file)) {
     mkdir ("Users/$username/Questions/$file");
     chmod("Users/$username/Questions/$file", 0777);
      header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/Presentations.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


?>