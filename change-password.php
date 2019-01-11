<?php include("header.php"); ?>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-color:#efefef;" >
  <main class="hoc container clear" style="padding-top:20px;"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content" > 
      <!-- ################################################################################################ -->
     
	 
      <div id="comments" >
      <div style="text-align:center;">  
        <h2 >Create New Password</h2>
		</div> 
    <?php
	if(isset($_GET["msge"])) 
	{
		if($_GET["msge"]=="suc")
		{
		?>
		<div style="background-color:#aaffaa; border:solid green 2px;">
			<p style="color:green;">password change succesfully</p>
		</div>
		
		<?php
		}
		else if($_GET["msge"]=="invalid")
			{
				?>
			<div style="background-color:pink; border:solid red 2px; text-align:center;padding:10px;">
				<p style="color:red; font-size:20px;">Current password doesn't match</p>
			</div>
			<?php
			}
			else if($_GET["msge"]=="failconfirmation")
			{
			?>
			<div style="background-color:pink; border:solid red 2px;">
				<p style="color:red;">Confirm password doesn't match</p>
			</div>
			
		<?php
			}
		}
	?>
	 <form action="change-password-controller.php" method="post">
        
		  <div class="block clear">
            <label for="comment">Current Password</label>
            <input type="password" name="CurrentPass" id="CurrentPass" value="" size="100">
				<span id="pasErr"></span>
          </div>
		  <div class="block clear">
            <label for="comment"> New Password</label>
            <input type="password" name="NewPass" id="NewPass" value="" size="100">
			<span id="newPassErr"></span>
          </div>
		  <div class="block clear">
            <label for="comment"> Confirm Password</label>
            <input type="password" name="ConfirmPass" id="ConfirmPass" value="" size="100">
			<span id="conPassErr"></span>
          </div>
          <div>
            <input type="submit" onclick="return changePasswordValidate();" name="submit" value="Submit ">
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