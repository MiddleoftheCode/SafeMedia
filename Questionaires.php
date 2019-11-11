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
<style>
    
.selection{
  color: red;
  font-weight: bold;
  text-decoration: none;
}
    
</style>

<script>
$(document).ready(function() {
  
  
  
});
</script>
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
 // presentation choice
 function questions(choice){
    
   
    var temp = choice;
    temp = temp.split(">").pop();
    temp = temp.substr(1);
    
   window.open("Questionaires.php?temp="+temp,"_self");
 }
 
 //question choice
 function  qchoice(choice)
 {
    
     document.getElementById("quest").innerHTML = "";
     var question = choice;
     question = question.split(">").pop();
     var presentation = "<?php echo($_GET['temp']); ?>"
     var user = "<?php echo($_SESSION['user']); ?>"
     var file = "Users/"+user+"/Questions/"+presentation+"/"+question+"/Question.txt";
     
     document.getElementById("presen").value = presentation;
     document.getElementById("questionchoice").value = question;

     
     
    // question 
     var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var questiontext = rawFile.responseText;
                document.getElementById("quest").innerHTML = questiontext;

            }
        }
    }
    rawFile.send(null);
    
    //answer 1
    var a1file = "Users/"+user+"/Questions/"+presentation+"/"+question+"/A1.txt";
    document.getElementById("a1").value = "";

     
     var ansFile1 = new XMLHttpRequest();
    ansFile1.open("GET", a1file);
    ansFile1.onreadystatechange = function ()
    {
        if(ansFile1.readyState === 4)
        {
            if(ansFile1.status === 200 || ansFile1.status == 0)
            {
                var thetext = ansFile1.responseText;
                document.getElementById("a1").value = thetext;
            }
        }
    }
    ansFile1.send(null);
    
    
    // answer 2
    
         var ansFile2 = new XMLHttpRequest();

    var a2file = "Users/"+user+"/Questions/"+presentation+"/"+question+"/A2.txt";
    document.getElementById("a2").value = "";
    ansFile2.open("GET", a2file);
    ansFile2.onreadystatechange = function ()
    {
        if(ansFile2.readyState === 4)
        {
            if(ansFile2.status === 200 || ansFile2.status == 0)
            {
                var a2text = ansFile2.responseText;
                document.getElementById("a2").value = a2text;
            }
        }
    }
    ansFile2.send(null);
    
    
    
    
    // answer 3
    
    var ansFile3 = new XMLHttpRequest();
    var a3file = "Users/"+user+"/Questions/"+presentation+"/"+question+"/A3.txt";
    document.getElementById("a3").value = "";
    ansFile3.open("GET", a3file);
    ansFile3.onreadystatechange = function ()
    {
        if(ansFile3.readyState === 4)
        {
            if(ansFile3.status === 200 || ansFile3.status == 0)
            {
                var a3text = ansFile3.responseText;
                document.getElementById("a3").value = a3text;
            }
        }
    }
    ansFile3.send(null);
    
    
    var ansFile4 = new XMLHttpRequest();
    
    var a4file = "Users/"+user+"/Questions/"+presentation+"/"+question+"/A4.txt";
     
                document.getElementById("a4").value = "";
     
     //answer 4
    ansFile4.open("GET", a4file);
    ansFile4.onreadystatechange = function ()
    {
        if(ansFile4.readyState === 4)
        {
            if(ansFile4.status === 200 || ansFile4.status == 0)
            {
                var a4text = ansFile4.responseText;
                document.getElementById("a4").value = a4text;
            }
        }
    }
    ansFile4.send(null);
   
     
 }
 
 
 function cq()
 {
    var presentation = "<?php echo($_GET['temp']); ?>"
    
   window.open("Questionaires.php?presentation="+presentation,"_self");

 }
 

     <?php
      function makeq(){
        $temp = $_GET['presentation'];
        $username = $_SESSION['user'];
        
        $i=-1;
    foreach(scandir("Users/".$username."/Questions/".$temp."/") as $folder) {
        $i++;
    }  
    
    mkdir ("Users/$username/Questions/$temp/Q$i");
    chmod("Users/$username/Questions/$temp/Q$i",0777);
    
    


      }
      
      if(isset($_GET['presentation']))
      {
          makeq();
      }
        
     ?>
 
   
</script>

<form action = "UpQuestion.php" method = "GET">


<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:-1;width:320px; position:absolute; top: 40px;" id="mySidebarP" name = "pname" onchange = "choice()">
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




<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:-1;width:320px; position:absolute; top: 40px; right:0px;" id="mySidebarQ" name = "qnum">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="question.png" style="width:20%;"> Questions</a>
  <p id = "questionnum"></p>
 <script>
  <?php
        $temp = $_GET['temp'];
        $username = $_SESSION['user'];
        $i=0;
        foreach(scandir("Users/".$username."/Questions/".$temp."/") as $folder) {
         
                if($i++ <= 1)
                {
                    continue;
                }
                
                
                
        ?>
                $("#questionnum").append("<a href='#' class='w3-bar-item w3-button' ></a>");
                $("#questionnum").append("<a href='#' class='w3-bar-item w3-button'  onClick = 'qchoice(this.innerHTML);'> <img src='question.png' style='width:5%;'>" + "<?php echo($folder); ?>" +"</a>");
    
        <?php
        }
    
    ?>
    
</script>
  <a href="#" class="w3-bar-item w3-button" style = "position:relative; bottom: 0;"></i></a>
  <a href="#" class="w3-bar-item w3-button" style = "position:relative; bottom: 0;" onClick = 'cq()'><img src="add.png" style="width:5%;" ></i>Add Another Question</a>
</nav>


<div class="w3-col m7" style="position:absolute; top: 40px; left:320px; ">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
                	<br><input type = "text" id = "presen"name = "presen" value = "" readonly><br>
					<input type = "text" id = "questionchoice" name = "qchoice" value = "" readonly><br>
              <h4>Enter Your Question Here!</h4>
			  <textarea name="questionupload" cols="80" rows="5" id = "quest"> </textarea>
			  <div class="w3-row-padding w3-center w3-padding-64" id="pricing" style = "margin:auto; display: grid; ">
												
													<div class="w3-third w3-margin-bottom" style = "grid-column: 1; grid-row: 1; width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">A</p>
														</li>
														 <li class="w3-padding-16"><input type="text" name = "a1" id = "a1"> </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="A1">This is the correct Answer<br>
														</li>
													  </ul>
													</div>

													<div class="w3-third w3-margin-bottom"  style = "grid-column: 2; grid-row: 1; width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">B</p>
														</li>
														 <li class="w3-padding-16"><input type="text" name = "a2" id="a2" > </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="A2">This is the correct Answer<br>
														</li>
													  </ul>
													</div>
													
													<div class="w3-third w3-margin-bottom" style = "grid-column: 1; grid-row: 2;width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">C</p>
														</li>
														 <li class="w3-padding-16"><input type="text" name = "a3" id="a3" > </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="A3">This is the correct Answer<br>
														</li>
													  </ul>
													</div>
													<div class="w3-third w3-margin-bottom"  style = "grid-column: 2; grid-row: 2; width:400px;">
													  <ul class="w3-ul w3-border w3-hover-shadow">
														<li class="w3-theme">
														  <p class="w3-xlarge">D</p>
														</li>
														 <li class="w3-padding-16"><input type="text" name = "a4" id = "a4"> </li>
														</li>
														<li class="w3-theme-l5 w3-padding-24">
														 <input type="radio" name="answer" value="A4">This is the correct Answer<br>
														</li>
													  </ul>
													</div>
												</div>
			  
			  
              <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Save Question</button> 
            </div>
          </div>
        </div>
      </div>
</div>

</form>
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


</body>
</html>
