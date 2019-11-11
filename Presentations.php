<?php
  session_start(); 
?>

<!DOCTYPE html>
<html>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    
<title>SafeMedia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage" style ="background-color:#808080;">


<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>



<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>SafeMedia</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Account<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <?php 
      if(isset($_SESSION['user']))
      {
         ?>  <a href="Presentations.php" class="w3-bar-item w3-button">Presentations</a> <?php
       
      }
      ?>
      <?php 
      if(isset($_SESSION['user']))
      {
         ?>   <a href="Questionaires.php" class="w3-bar-item w3-button">Questionnaires</a> <?php
       
      }
      ?>
      <?php 
      if(isset($_SESSION['user']))
      {
         ?> <a href="reports.php" class="w3-bar-item w3-button">Reports</a> <?php
       
      }
      ?>
      
      <button class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'" > 
      <?php 
      if(isset($_SESSION['user']))
      {
         echo($_SESSION["user"]); 
       
      }else
      {
           echo("Login");
      }
      ?>
      </button>
     <?php
     if(isset($_SESSION['user']))
      {
        ?><a href="logout.php" class="w3-bar-item w3-button">Logout</a> <?php
      }
     ?>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

</div>



<style>
    
    #pre{
        position:relative;
        top:30px;
        width: 100%;
        display = "none"
    }
    
</style>

<div id = "pre">

</div>
<script>
    <?php
    $username = $_SESSION['user'];

    
    foreach(glob("Users/" . $username . "/Presentations"."/*.*") as $file) {
        
     ?>
    
    $("#pre").append("<div  style = 'margin: 20px;' class='w3-container w3-card w3-white w3-round w3-margin' ><br><img src='powerpoint.png' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:50px;'> " + "<h4> <?php echo(basename($file)); ?> </h4> " + "</div>");
    
    <?php
    }
    ?>
    
</script>


<form method = "POST" action = "/SafeMedia/upload.php" enctype="multipart/form-data">
    <br><br>
<div class="w3-container w3-card w3-white w3-round w3-margin" style = "position:relative;bottom:0px; left:1200px; width:300px" ><br>
        <input type = "file" id = "presentationFile" name = "presentationFile" accept = "application/vnd.openxmlformats-officedocument.presentationml.presentation" >
        <br><br>
        <img src="upload.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:50px;">
        <input type = "submit" name = "submit" value = "Upload Presentation">
</div>
</form>


<!-- Footer -->
<br><br>
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" style = "position: relative;bottom:0;  width: 100%;">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  
    
    
    
    
    
</script>

</body>

</html>
