<?php

session_start();


$username = $_SESSION['user'];

$presentation = $_GET['presen'];
$question = $_GET['qchoice'];

$qtxt = $_GET['questionupload'];
$a1txt = $_GET['a1'];
$a2txt = $_GET['a2'];
$a3txt = $_GET['a3'];
$a4txt = $_GET['a4'];
$correctanswer = $_GET['answer'];
        
            
// create the files
$qfile = fopen("Users/$username/Questions/$presentation/$question/Question.txt","w");
$a1file = fopen("Users/$username/Questions/$presentation/$question/A1.txt","w");
$a2file = fopen("Users/$username/Questions/$presentation/$question/A2.txt","w");
$a3file = fopen("Users/$username/Questions/$presentation/$question/A3.txt","w");
$a4file = fopen("Users/$username/Questions/$presentation/$question/A4.txt","w");
$cafile = fopen("Users/$username/Questions/$presentation/$question/CA.txt","w");


            
//write to the files
fwrite($qfile, $qtxt);
fwrite($a1file, $a1txt);
fwrite($a2file, $a2txt);
fwrite($a3file, $a3txt);
fwrite($a4file, $a4txt);
fwrite($cafile, $correctanswer);



// close the files
fclose($qfile);
fclose($a1file);
fclose($a2file);
fclose($a3file);
fclose($a4file);
fclose($cafile);



//return to the questions page
header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/Questionaires.php");



?>