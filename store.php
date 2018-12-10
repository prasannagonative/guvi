<?php
session_start();
if(!isset($_SESSION['name']))
{
    
    echo "<script>
     alert('You Need to Login First');
       window.location.href='../index.php';
       </script>";
}
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
	<title>update</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /><!--Import materialize.css-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" rel="stylesheet" /><!-- Compiled and minified JavaScript --><script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script><!--Let browser know website is optimized for mobile--><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="script.js"></script>
	<style type="text/css">


	@media only screen and (max-width: 600px) {
   /* body {
        background-color: lightblue;
    }*/
    #oo{
    	display: none;
    }
    #bar
    {
    	width: 500px;
    }
   }
@media only screen and (min-width: 600px) {
   /* body {
        background-color: lightblue;
    }*/
    #ooo{
    	display: none;

    }
     #userlog
    {
    	padding-top: 150px;
    }

   
}
	</style>
</head>
<body>




<div id="ooo"><div class="col s12">
<div class="row" style="padding-left: 25px;">
<p style="font-family: vintage;font-weight: 800;font-size: 28px;"><i class="material-icons large">pages</i> product<span style="color: white;font-size: 40px;"> update</span></p>
</div>
</div></div>

<div class="row">
	<div id="oo">
<div class="col s6">
<div class="row" style="padding-top: 140px;padding-left: 25px;">
<p style="font-family: vintage;font-weight: 900;font-size: 55px;"><i class="material-icons large">pages</i> product <span style="color: white;font-size: 40px;"> update</span></p>
</div>
</div></div>



<div id="userlog">
<div class="col s6">
<div class="row" >

   <div style="padding-left:550px;"><a class="btn-floating btn-large waves-effect waves-light red" href="../logout.php"><i class="material-icons" title="logout">pause_circle_outline</i></a></div>

<form action="update.php" class="col s12" method="POST">
<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">person</i> <input class="validate" name="uname" id="icon_prefix" type="text" required/> <label for="icon_prefix">Name</label></div>
</div></div>


<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">email</i> <input class="validate" name="email" id="icon_prefix" type="email" required/> <label for="icon_prefix">Email</label></div>
</div></div>


<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">assignment_ind</i> <input class="validate" name="mobile" id="icon_prefix" type="text" required/> <label for="icon_prefix">Mobile</label></div>
</div></div>


<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">info</i> <input class="validate" name="degree" id="icon_prefix" type="text" required/> <label for="icon_prefix">Degree</label></div>
</div></div>

<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">announcement</i> <input class="validate" name="dept" id="icon_prefix" type="text" required/> <label for="icon_prefix">Department</label></div>
</div></div>
<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">more</i> <input class="validate" name="college" id="icon_prefix" type="text" required/> <label for="icon_prefix">College</label></div>
</div></div>

<div class="row"><div id="bar">
<div class="input-field col s8"><i class="material-icons prefix">my_location</i> <input class="validate" name="city" id="icon_prefix" type="text" required/> <label for="icon_prefix">City</label></div>
</div></div>


<div class="row">
<div class="col s11 offset-s1"><input type="submit" value="update" class="waves-effect waves-light btn-large" style="border-radius: 100px; width: 310px;" ></div>
</div>
</form>

<div class="row">
<div class="col s11 offset-s1">
<p>I have updated.Need to view?<a href="view.php">view</a></p>
</div>
</div>
</div>
</div>
</div>


<!--JavaScript at end of body for optimized loading--><script type="text/javascript" src="js/materialize.min.js"></script></div>
</body>
</html>