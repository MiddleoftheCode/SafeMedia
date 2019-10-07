<!DOCTYPE html>
<html>
<title>SafeMedia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>SafeMedia</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Account<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="Presentations.html" class="w3-bar-item w3-button">Presentations</a>
      <a href="Questionaires.html" class="w3-bar-item w3-button">Questionaires</a>
	  <a href="reports.html" class="w3-bar-item w3-button">Reports</a>
      <a href="#" class="w3-bar-item w3-button">Account Information</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

</div>


<form method = "POST" action = "/SafeMedia/register.php" style="border:5px solid #ccc; width: 100%; display: inline-block; text-align:center; padding-top:100px; padding-bottom: 100px; background-color:#FDE962; font-weight:bold;">
  <div class="container" style = "t">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>
    
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required><br>
    
    <label for="email"><b>PhoneNumber (Optional</b></label>
    <input type="text" placeholder="Enter PhoneNumber" name="phone" ><br>
    
    <label for="email"><b>Adress (Optional)</b></label>
    <input type="text" placeholder="Enter Address" name="address" ><br>
    
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label><br>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button><br>
      <button type="submit" class="signupbtn">Sign Up</button><br>	
    </div>
  </div>
</form>




<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" style = "position: relative;bottom: 0;  width: 100%;">
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
