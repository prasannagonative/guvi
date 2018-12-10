
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /><!--Import materialize.css-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="images/bg1.jpg">

<div id="ooo"><div class="col s12">
<div class="row pl-25">
<p class="p-1"><i class="material-icons large">pages</i> Login<span class="span-1"> Here</span></p>
</div>
</div>
</div>

<div class="row" >
<div id="oo"><div class="col s6">
<div class="row rw-1">
<p class="p-1"><i class="material-icons large">pages</i> Login<span class="span-1"> Here</span></p>
</div>
</div></div>




<div id="userlog">
<div class="col s6">
<div class="row" >
  <?php
  if (isset($_GET["success"])) {
    echo $_GET["success"];
    # code...
  }
  ?>


<!-- 
   <div style="padding-left:550px;"><a class="btn-floating btn-large waves-effect waves-light red" href="http://itzmeprasanna.ml/shoppingcart/update/update.html"><i class="material-icons">person</i></a></div> -->
<form action="login.php" class="col s12" method="POST">
<div class="row">
	<div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">account_circle</i> <input class="validate" name="user" id="icon_prefix" type="text" /> <label for="icon_prefix">First Name</label></div></div>
</div>

<div class="row">
	<div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">create</i> <input class="validate" name="pass" id="icon_telephone" type="Password" /> <label for="icon_telephone">Password</label></div>
</div></div>

<div class="row">
<div class="col s11 offset-s1"><input type="submit" class="waves-effect waves-light btn-large btn-log" value="Login"></div>
</div>
</form>

<div class="row">
<div class="col s11 offset-s1">
<p>I dont have an account?<a href="signup.html">SignUp</a></p>
</div>
</div>
</div>
</div></div>
<!-- <div class="navbar"><p id="foot">&copy;Designed & Developed by <a href="http://itzmeprasanna.ml">??pR@$@nN@!!.</a></p></div> -->
<!--JavaScript at end of body for optimized loading--><script type="text/javascript" src="js/materialize.min.js"></script></div>
</body>
</html>