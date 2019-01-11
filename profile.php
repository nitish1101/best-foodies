<?php include("header.php");?>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-color:#efefef;" >
  <main class="hoc container clear" style="padding-top:20px;"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content" > 
      <!-- ################################################################################################ -->
     
      <div id="comments" >
      <div style="text-align:center;">  
        <h2 >Profile</h2>
		<?php 
		
			$email=$_SESSION["UserSess"];
			$rows=$db->getUserDetails($email);
			$r=mysqli_fetch_array($rows);
		?>
		</div> 
		<div style="padding:40px; margin-left:332px;">
		<?php
			$rb=$db->getUserImage($_SESSION["UserSess"]);
			if($rb==0)
			{
		?>
				<a href="user-image.php?op=add"><img src="images/demo/people.png" style="border:solid #3aacec 5px; border-radius:20px; height:200px; width:200px;"></a>
		<?php
			
			}
			else
			{
				$img=$rb["ImagePath"];
		?>
		
				<a href="user-image.php?op=update" ><img src="<?php echo $img;?>" style="border:solid #3aacec 5px; border-radius:20px; height:200px; width:200px;"></a>
		
			<?php 
			}
			?>
		</div>
		<?php 
			
		
			if(isset($_GET["op"]))
			{	
		?>
		
        <form action="profile-controller.php" method="post">
		
		
			<input type="hidden" value="<?php echo $email; ?>" id="Emailid" name="Emailid"/>
		 
		 
		 <div class="block clear">
           
		   <label for="comment">Name</label>

		   <input type="text" name="E_Name" id="E_Name" value="<?php echo$r["Name"];?>" size="100">

		   </div>
         
		  <div class="block clear">
            <label for="comment">Address</label>
            <input type="text" name="E_Address" id="E_Address" value="<?php echo$r["Address"];?>" size="200">
          </div>
		  
		  <div class="block clear">
            <label for="comment">City</label>
            <input type="text" name="E_City" id="E_City" value="<?php echo$r["City"];?>" size="40">
          </div>
		  <div class="block clear">
            <label for="comment">Pin</label>
            <input type="number" name="E_Pin" id="E_Pin" value="<?php echo$r["Pin_Code"];?>" size="6">
          </div>
			 <div class="block clear">
            <label for="comment">Contact no.</label>
            <input type="number" name="E_Contact" id="E_Contact" value="<?php echo$r["Contact"];?>" size="10">
          </div>
		
          <div>
            <input type="submit" name="submit" value="submit">            
          </div>
        </form>
      </div>
	  <?php 
			}
			else
			{
	  ?>
			<form action="profile.php?op=edit" method="post">
          <div class="block clear">
            <label for="comment" style="font-size:30px;">Name:</label>
			<span style="font-size:30px;"><?php echo$r["Name"];?></span>
          </div>        
		  <div class="block clear">
            <label for="comment" style="font-size:30px;">Address :</label>
            <span style="font-size:30px;"><?php echo$r["Address"];?></span>
          </div>
		  <div class="block clear">
            <label for="comment" style="font-size:30px;">City :</label>
            <span style="font-size:30px;"><?php echo$r["City"];?></span>
          </div>
		  <div class="block clear">
		  
            <label for="comment" style="font-size:30px;">Pin :</label>
			
			<span style="font-size:30px;">    <?php echo$r["Pin_Code"];?>     </span>
          
		  </div>
			 <div class="block clear">
            <label for="comment" style="font-size:30px;">Contact no. :</label>
			<span style="font-size:30px;"><?php echo$r["Contact"];?></span>
          </div>
          <div>
            <input type="submit" name="submit" value="Edit profile">            
          </div>
        </form>
      </div>
			
	  <?php
			}
	  ?>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>



<?php include("footer.php");?>