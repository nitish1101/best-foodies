<!DOCTYPE html>
<!--
Template Name: Drywest
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title> project food</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link href="css/agency.css" rel="stylesheet" type="text/css" media="all">
<link href="css/agency.min.css" rel="stylesheet" type="text/css" media="all">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0" >
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><i class="fa fa-clock-o"></i> Mon. - Fri. 8am - 5pm</li>
      <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
      <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="#" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
      <li><a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1" style="background-color:#ecc03a;">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">FOOD BOX</a></h1>
    </div>
   
	</div>
					<script>
		h=1;
		function displayLogin()
		{	
			x=document.getElementById("popup");
			x.style.display="block";
			x.style.height=h+"px";
			if(h<150)
			{
				h=h+5;
				setTimeout(displayLogin, 100);
			}
		}
		function hideLogin()
		{

			x=document.getElementById("popup");
			
			x.style.height=h+"px";
			if(h>1)
			{
				h=h-5;
				setTimeout(hideLogin, 100);
			}
			else
			{
				x.style.display="none";   
			}
		}
		</script>
					
										</div>
		
    <!-- #########################################################	####################################### -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/background-1.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
          <li class="active"><a href="../index.html">Home</a></li>
		<li><a href="menu.php">Our Menu</a></li>
        
        </li>
        <li><a class="drop" href="#">Meal</a>
          <ul>
            <li><a href="pages/breakfast.html">Breakfast</a></li>
            <li><a href="pages/lunch.html">Lunch</a></li>
            <li><a href="pages/dinner.html">Dinner</a></li>
          </ul>
        </li>
        
		<li><a href="pages/about.html">About Us</a></li>
		<li><a href="pages/contact.html">Contact</a></li>
	</ul>
	  
      <!-- ################################################################################################ -->
    </nav>
  </div>
