<?php
  session_start();
   
?>

<!DOCTYPE html>
<html>
<title>SafeMedia</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage" style ="background-color:#808080;">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
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
<script>
function questions(choice){
    
   var temp = choice;
    temp = temp.split(">").pop();
    temp = temp.substr(1);
    
   window.open("reports.php?temp="+temp,"_self");
    
    
 }
</script>


<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:-1;width:320px; position:relative; top: 40px;" id="mySidebar">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="powerpoint.png" style="width:20%;"> Presentations</a>
  <p id = "q"><br></p>
  <script>
    <?php
    $username = $_SESSION['user'];
    
    $i=0;
    foreach(scandir("Users/".$username."/Questions/") as $folder) {
        if($i++ <= 1)
        {
            continue;
        }
     ?>
    
      $("#q").append("<a href='#' class='w3-bar-item w3-button' name = 'presentation' onClick = 'questions(this.innerHTML);' > <img src='powerpoint.png' style='width:5%;' >" + " <?php echo($folder); ?> " +"</a>");
    
    <?php
    }
    ?>
   
</script>
</nav>


<div id = "reports">

<div id="General" class="w3-container person" style = "position: absolute;  top: 40px; left:400px;z-index:-1;">
  <br>

<table style = "border: 1px solid black;">
    <tr>
        <th style = "border: 1px solid black;">Employee ID</th>
        <th  style = "border: 1px solid black;">Presentation Viewed</th>
        <th  style = "border: 1px solid black;" >Score Achieved</th>
    </tr>
    <?php
    
               
                 $servername = "localhost";
                                                $username = "awasthim_omar";
                                                $password = "_7dWDq+Fq&0&";
                                                $connectioninfo = "awasthim_safemedia";
                                                
                                                $conn = new mysqli($servername, $username, $password, $connectioninfo);
                                                
                                                
                                                
                                                
                                                if($conn->connect_error)
                                                {
                                                    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMediaApp/index.php");
                                                }
                                                
                if(isset($_GET['temp']))
                {
                        $presentation = $_GET['temp'];                                
                        
                        $result  = $conn->query( "SELECT * FROM scores WHERE Presentation = '$presentation'") or die($conn->error);
                        
                        
                        if ($result->num_rows > 0) {
                           foreach($result as $row => $value) 
                            {
                                ?> <tr>
                                            <td  style = "border: 1px solid black;"><?php echo($value['empID']); ?></td>    
                                            <td  style = "border: 1px solid black;"><?php echo($value['Presentation']);?></td>
                                            <td  style = "border: 1px solid black;" ><?php echo($value['Score']);?>%</td>
                                    </tr>
                                <?php    
                            }  
                           
                           
                            
                        }
                        
                }
                
            $conn->close();
    
    ?>
</table>
</div>
</div>



<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" style = "position: relative; top: 1500px;width: 100%; height: 15%;">
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
<script>
function openReport(presentation) {
  var i;
  var x = document.getElementsByClassName("person");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" w3-light-grey", "");
  }
  document.getElementById(presentation).style.display = "block";
  event.currentTarget.className += " w3-light-grey";
}
</script>

</body>
</html>
