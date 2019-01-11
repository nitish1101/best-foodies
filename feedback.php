<?php include("header.php");?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      
	  <ul class="clear">
        <li><a href="index.php">Home</a></li>
        
		<li><a href="#">Contact</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
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
        <h2 >Feedback</h2>
		</div> 
		
		<?php
		if(isset($_GET["msgf"]))
			{
												
				if($_GET["msgf"]=="suc")
				{
					?>
					<div style="background-color:#aaffaa; border:solid 2px green;padding:10px; border-radius:5px; margin-bottom:10px">
					Feedback send successfully!
					</div>
					<?php
				}
		}
		?>
        <form action="Feedback-controller.php" method="post">
			<?php
				$user=$_SESSION["UserSess"];
				$rows=$db->getUserDetails($user);
				$r=mysqli_fetch_array($rows);
			?>
			<div style="Font-size:30px;"> Name  :&nbsp;  <?php echo $r["Name"]?></div>
			<div style="Font-size:30px;"> Address :&nbsp;<?php echo $r["Address"]?></div>
			<div style="Font-size:30px;"> City  :&nbsp;<?php echo $r["City"]?></div>
			<div style="Font-size:30px;"> Contact no  : &nbsp;<?php echo $r["Contact"]?></div>
			<div style="Font-size:30px;"> Email Id :&nbsp;<?php echo $r["Email_Id"]?></div>
			<div style="Font-size:30px;"> FeedBack on  :
			<div style="float:right; margin-right:420px;"><select name="meal_name" id="meal_name">
			<option selected disabled hidden>Meals</option>
			<?php 
			
				$a=$db->getMealDetails(0);
				while($ab=mysqli_fetch_array($a))
				{
					echo"<option>".$ab["Name"]."</option>";
				}				
			?>
			
			</select></div>
			</div>
		 <input type="hidden" value="<?php echo date("d/m/20y");?>" name="date">
		 <input type="hidden" value="<?php echo $r["User_Id"];?>" name="userid">
		  <div class="block clear">
            <label for="comment" style="Font-size:30px;">Feedback:</label>
            <textarea name="feedback" id="feedback" cols="25" rows="10"></textarea>
			<span id="feedErr"></span>
          </div>
          <div>
            <input type="submit" name="submit"  onclick="return RegistrationValidate();" value="Submit ">
        
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