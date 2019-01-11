<!DOCTYPE html>
<?php session_start();?>
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
 <?php
	
  if(isset($_SESSION["UserSess"]))
  {
	  
	  $rows=$db->getUserDetails($_SESSION["UserSess"]);
	  $r=mysqli_fetch_array($rows);
	  $name=$r["Name"];
	  ?>
		<div style="float:right;">
			<a href="logout-controller.php"  style=" float:right; margin-left:20px; text-decoration:none;  padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;">logout</a>
			<a href="change-password.php"  style=" float:right; margin-left:20px; text-decoration:none;  padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;">Change password</a>
			<a href="#"  style=" float:right; margin-left:20px;text-decoration:none;  padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;"><img src="" alt="">My Food Box</a>
			<a href="profile.php"  style=" float:right; margin-left:20px; text-decoration:none;  padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;"><?php echo$name;?></a>
			<?php
				$rb=$db->getUserImage($_SESSION["UserSess"]);
				if($rb==0)
				{ ?>
					<a href="user-image.php?op=add"  style=" float:right; text-decoration:none; border:solid white 2px; padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;"><img src="images/demo/people.png" style="height:50px; width:50px;"alt=""></a>
				<?php
				}
				else
				{
					$img=$rb["ImagePath"];
			?>
					<a href="user-image.php?op=update"  style=" float:right; text-decoration:none; border:solid white 2px; padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;"><img src="<?php echo $img?>" style="height:50px; width:50px;"alt=""></a>   
			<?php
				}
			?>
   </div>
		
  <?php } 
  else
  {
	  ?>
	<div style="float:right;">
	<a href="registration.php"  style=" float:right; margin-left:30px; text-decoration:none; border:solid white 2px; padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;">Registration</a>
	<a href="#" onclick="login_display();loginErr_hide();" style=" float:right; text-decoration:none; border:solid white 2px; padding:5px; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;border-radius:5px; margin-top:7px; color:white;">Login</a>
 
  </div>
   
   <?php
	}
   ?>  
    <!-- ################################################################################################ -->
	<!-- #########################################################-->
<!-- #########################################################-->
<!-- #########################################################-->  
	
   <div id="logo" class="fl_left">
	
      <h1 ><a href="#" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:40px;text-decoration:none;">FOOD BOX</a></h1>
    
		
    <!-- #########################################################	####################################### -->
  </header>
  
  
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
		<?php
		if(isset($_GET["msgr"]))
			{
												
				if($_GET["msgr"]=="suc")
				{
					?>
					<div style="background-color:#aaffaa; border:solid 2px green;padding:10px; border-radius:5px; margin-bottom:10px">
					Password is successfully send to Your Register Email Id!
					</div>
					<?php
				}
		}
		?>
        <form action="forgot-password-controller.php" method="post">
          
		  <div class="block clear">
            <label for="comment">Enter Email Id</label>
            <input type="text" name="ch_Email" id="ch_Email" value="" placeholder="Email Id" size="200">
          </div>
         
		  
          <div>
            <input type="submit" name="restore" value="Restore ">
           
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


<?php include("footer.php");?>