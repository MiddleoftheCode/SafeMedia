<?php
  session_start(); 
?>

<!DOCTYPE html>
<html>
<title>SafeMedia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage" style ="background-color:#808080;">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>SafeMedia</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Account   <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="Presentations.php" class="w3-bar-item w3-button">Presentations</a>
      <a href="Questionaires.php" class="w3-bar-item w3-button">Questionnaires</a>
	  <a href="reports.php" class="w3-bar-item w3-button">Reports</a>
      <button class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'" > <?php 
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





<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:-1;width:320px; position:absolute; top: 40px;" id="mySidebar">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="powerpoint.png" style="width:20%;"> Presentations</a>
  <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;">General Saftey</a>
  <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;"></i>WHMIS Training</a>
  <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;"></i>Operating Forklift</a>
   <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;"></i>Customer Interaction</a>
  <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;"></i>HR Presentation</a>
  <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;"></i>Marketing Presentation</a>
   <a href="#" class="w3-bar-item w3-button"><img src="powerpoint.png" style="width:5%;"></i>Sales Presentation</a>
</nav>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:-1;width:320px; position:absolute; top: 40px; right:0px;" id="mySidebar">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="question.png" style="width:20%;"> Questions</a>
  <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 1</a>
  <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 2</a>
  <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 3</a>
   <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 4</a>
  <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 5</a>
  <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 6</a>
   <a href="#" class="w3-bar-item w3-button"><img src="question.png" style="width:5%;"></i>Question 7</a>
    <a href="#" class="w3-bar-item w3-button" style = "position:relative; bottom: 0;"><img src="add.png" style="width:5%;"></i>Add Another Question</a>
</nav>





<div class="w3-col m7" style="position:absolute; top: 40px; left:320px; ">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h4>Enter Your Question Here!</h4>
			  <textarea name="Text1" cols="80" rows="5"> </textarea>
			  <div class="w3-row-padding w3-center w3-padding-64" id="pricing" style = "margin:auto; display: grid; ">
													
													
													<div class="w3-third w3-margin-bottom" style = "grid-column: 1; grid-row: 1; width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">A</p>
														</li>
														 <li class="w3-padding-16"><input type="text" > </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="answer">This is the correct Answer<br>
														</li>
													  </ul>
													</div>

													<div class="w3-third w3-margin-bottom"  style = "grid-column: 2; grid-row: 1; width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">B</p>
														</li>
														 <li class="w3-padding-16"><input type="text" > </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="answer">This is the correct Answer<br>
														</li>
													  </ul>
													</div>
													
													<div class="w3-third w3-margin-bottom" style = "grid-column: 1; grid-row: 2;width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">C</p>
														</li>
														 <li class="w3-padding-16"><input type="text" > </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="answer">This is the correct Answer<br>
														</li>
													  </ul>
													</div>
													<div class="w3-third w3-margin-bottom"  style = "grid-column: 2; grid-row: 2; width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">D</p>
														</li>
														 <li class="w3-padding-16"><input type="text" > </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="answer">This is the correct Answer<br>
														</li>
													  </ul>
													</div>
												</div>
			  
			  
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Save Question</button> 
            </div>
          </div>
        </div>
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
var openTab = document.getElementById("firstTab");
openTab.click();
</script>
<script>
var openInbox = document.getElementById("myBtn");
openInbox.click();

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

function myFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show"; 
    x.previousElementSibling.className += " w3-red";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-red", "");
  }
}

openMail("Borge")
function openMail(personName) {
  var i;
  var x = document.getElementsByClassName("person");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" w3-light-grey", "");
  }
  document.getElementById(personName).style.display = "block";
  event.currentTarget.className += " w3-light-grey";
}
</script>
<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
</html>
