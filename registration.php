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
<link href="layout/styles/framework.css" rel="stylesheet" type="text/css" media="all">
	<link href="layout/styles/agency.min.css" rel="stylesheet" type="text/css" media="all">
	
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	<script>
		function login_display()
		{
			x=document.getElementById("login_div");
			x.style.height="auto";
			x.style.display="block";			
		}
		function login_hide()
		{
			x=document.getElementById("login_div");
		
			x.style.display="none";
			
		}
		function RegistrationValidate()
		{
			a=true;
			namec=document.getElementById("R_Name");
			addressc=document.getElementById("R_Address");
			cityc=document.getElementById("R_City");
			pinc=document.getElementById("R_Pin");
			contactc=document.getElementById("R_Contact");
			emailc=document.getElementById("R_Email");
			passc=document.getElementById("R_Password");
			
			nameErr=document.getElementById("NameErr");
			addressErr=document.getElementById("AddressErr");
			cityErr=document.getElementById("CityErr");
			pinErr=document.getElementById("PinErr");
			contactErr=document.getElementById("ContactErr");
			emailErr=document.getElementById("EmailErr");
			passErr=document.getElementById("PassErr");
			
			if(namec.value=="")
			{
				nameErr.innerHTML="Name is required!";
				nameErr.style.color="red";
				a=false;
			}
			else
			{
					nameErr.innerHTML="";	
			}
			
			if(addressc.value=="")
			{
				addressErr.innerHTML="Address is required!";
				addressErr.style.color="red";
				a=false;
			}
			else
			{
					addressErr.innerHTML="";	
			}
			if(cityc.value=="")
			{
				cityErr.innerHTML="City is required!";
				cityErr.style.color="red";
				a=false;
			}
			else
			{
					cityErr.innerHTML="";	
			}
			if(pinc.value=="")
			{
				pinErr.innerHTML="Pin is required!";
				pinErr.style.color="red";
				a=false;
			}
			else
			{
					pinErr.innerHTML="";	
			}
			if(contactc.value=="")
			{
				contactErr.innerHTML="Contact is required!";
				contactErr.style.color="red";
				a=false;
			}
			else
			{
					contactErr.innerHTML="";	
			}
			if(emailc.value=="")
			{
				emailErr.innerHTML="Email is required!";
				emailErr.style.color="red";
				a=false;
			}
			else
			{
					emailErr.innerHTML="";	
			}
			if(passc.value=="")
			{
				passErr.innerHTML="password is required!";
				passErr.style.color="red";
				a=false;
			}
			else
			{
					passErr.innerHTML="";	
			}
			return a;
		}
		function banner_display(ban_img)
		{
			i=document.getElementById("banner_img");
			i.style.backgroundImage="url('backfoot/"+ban_img+"')";
			//style="background-image:url('images/demo/backgrounds/background-1.jpg');"
		}
			function myslider1()
		{
				<?php
						include("DBModel.php");
						$db=new DemoDBCode;
						$rows=$db->getBannerDetails(0);
						while($r=mysqli_fetch_array($rows))
						{
							$img=$r["ImagePath"];
						?>
							setTimeout(banner_display("<?php echo$img; ?>"),3000);
						<?php
						}
						?>
		}
	
	</script>
	
	

</head>
<body id="top" onload="myslider1(); <?php if(isset($_GET["msg"])){?>login_display();<?php } ?> ">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1" style="background-color:#3aacec;">
  <header id="header" class="hoc clear" > 
    <!-- ################################################################################################ -->
	<!-- #########################################################-->
<!-- #########################################################-->
<!-- #########################################################-->  
	<div style="float:right;">
	<a href="registration.php"  style=" float:right; margin-left:30px; text-decoration:none; border:solid white 2px; padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;">Registration</a>
	<a href="#" onclick="login_display();" style=" float:right; text-decoration:none; border:solid white 2px; padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;">Login</a>
   
   </div>
   <div id="logo" class="fl_left">
	
      <h1 ><a href="#" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:40px;text-decoration:none;">BEST FOODIES</a></h1>
    
		
    <!-- #########################################################	####################################### -->
  </header>
  dse
  
	<div id="login_div" style="  display:none;padding:3px 10px 10px 10px;  position:fixed; top:250px; left:580px; z-index:100; overflow:hidden; background-color:#efefef;height:155px; width:260px; ">
		<div style="text-align:right;">
			
			<a href="#" onclick="login_hide();" style="text-decoration:none;" ><img src="images/demo/close2.png " style="height:20px;width:20px;" alt="img"></a>
		<?php
				if(isset($_GET["msg"]))
				{
					?>
					<div style="background-color:pink; border:solid red 1px; text-align:center; margin-top:4px;" >
					<p> inavlid Email Id/Password</p>
					</div>
					
					<?php
				}	
		?>
		
		<form method="post" action="login-controller.php">
		</div>
		<div>
			<input type="text" name="login_user" id="login_user" placeholder="Enter Email " style="margin-top:5px;width:240px; padding:5px;" />
		</div>
		
		<div>
			<input type="text" name="login_pass" id="login_pass" placeholder="Enter Password " style="margin-top:5px;width:240px;padding:5px;"/>
		</div>
		<button style="margin-top:5px; background-color:#3aacec;width:240px;  padding:5px;border:none;">Login</button>
		</form>
		
	</div>
  <!-- #########################################################-->
<!-- #########################################################-->
<!-- #########################################################-->  
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded"  name="banner_img" id="banner_img"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row2" >
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
          <li class="active"><a href="index.php"  >Home</a></li>
		<li><a href="menu.php">Our Menu</a></li>
        
        </li>
        <li><a class="drop" href="#" style="color:black;">Meal</a>
          <ul>
            <li><a href="breakfast.php" >Breakfast</a></li>
            <li><a href="lunch.php" >Lunch</a></li>
            <li><a href="dinner.php" >Dinner</a></li>
          </ul>
        </li>
        
		<li><a href="about.php">About Us</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	  
      <!-- ################################################################################################ -->
    </nav>
  </div>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-color:#efefef;" >
  <main class="hoc container clear" style="padding-top:20px;"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content" > 
      <!-- ################################################################################################ -->     
      <div id="comments" >
      <div style="text-align:center;">  
        <h2 >Registration Form</h2>
		</div> 
        <form action="registration-controller.php" method="post">
          
		  <div class="block clear">
            <label for="comment">Name</label>
            <input type="text" name="R_Name" id="R_Name" value="" size="100">
			<span id="NameErr"></span>
          </div>
         
		  <div class="block clear">
            <label for="comment">Address</label>
            <input type="text" name="R_Address" id="R_Address" value="" size="200">
			<span id="AddressErr"></span>
          </div>
		  
		  <div class="block clear">
            <label for="comment">City</label>
            <input type="text" name="R_City" id="R_City" value="" size="40">
			<span id="CityErr"></span>
          </div>
		  <div class="block clear">
            <label for="comment">Pin</label>
            <input type="number" name="R_Pin" id="R_Pin" value="" size="6">
			<span id="PinErr"></span>
          </div>
			 <div class="block clear">
            <label for="comment">Contact no.</label>
            <input type="number" name="R_Contact" id="R_Contact" value="" size="10">
			<span id="ContactErr"></span>
          </div>
		 <div class="block clear">
            <label for="comment">Email Id</label>
            <input type="text" name="R_Email" id="R_Email" value="" size="100">
			<span id="EmailErr"></span>
          </div>
		  <div class="block clear">
            <label for="comment">Password</label>
            <input type="password" name="R_Password" id="R_Password" value="" size="100">
			<span id="PassErr"></span>
          </div>
          <div>
            <input type="submit" name="submit"  onclick="return RegistrationValidate();" value="Submit ">
            &nbsp;
            <input type="reset" name="reset" value="Reset">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>