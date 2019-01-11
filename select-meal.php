<?php include("header.php");?>


<!--################################################################################################ -->
  <div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">select meal</a></li>
		
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div >
<div style="background-color:#efefef;">
<?php 
		$id=1;
		if(isset($_GET["day"]))
		{?>
	<form method="post" action="select-meal-controller.php?day=<?php echo$_GET["day"]?>" >
	<div style="height:500px; padding:70px;height:200px ">
		<a href="select-meal.php?day=Monday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Monday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin-left:40px; border-radius:10px;">Monday</a>
		<a href="select-meal.php?day=Tuesday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Tuesday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Tuesday</a>
		<a href="select-meal.php?day=Wednesday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Wednesday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Wednesday</a>
		<a href="select-meal.php?day=Thursday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Thursday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Thursday</a>
		<a href="select-meal.php?day=Friday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Friday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Friday</a>
		<a href="select-meal.php?day=Saturday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Saturday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Saturday</a>
		<a href="select-meal.php?day=Sunday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Sunday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Sunday</a>
		<div style="clear:both;"></div>
		
	</div>
		
		<?php
		
				if(isset($_SESSION["UserSess"]))
				{
					$b=$_SESSION["UserSess"];
					$usr=$db->getUserDetails($b);
					$ru=mysqli_fetch_array($usr);
					echo"<input type='hidden' value='".$ru["User_Id"]."' name='userid'>";
				}
		
		?>
			<div style="padding-left:110px; margin-top:0px;">
			<div style="width:400px;  float:left; text-align:center; ">
			<h2>Breakfast</h2>
				<table>
					<thead>
						<th style="text-align:center; font-size:25px; padding:10px;">Meals</th>
						<th style="text-align:center; font-size:25px; padding:10px;">select</th>
					</thead>
					<tbody>
						<?php
							
							$rdti=$db->getDayTimeId($_GET["day"],"Breakfast");
							$rdti1=mysqli_fetch_array($rdti);
							$rdwd=$db->getDayWiseMealDetails($rdti1["DayAndTime_ID"]);
							while($rdwd1=mysqli_fetch_array($rdwd))
							{
								$a=$rdwd1["Meal_ID"];
								$rows=$db->getMealDetails($a);
								$r=mysqli_fetch_array($rows);
								echo"<tr>";
								echo"<td style='padding:15px;'>";
								echo"<div><img src='backfoot/".$r["ImagePath"]."' style='margin-bottom:20px; height:100px; width:200px;' /> <br> <span style='font-size:20px;'>".$r["Name"]."</span> <br><span style='font-size:20px;'>Rs.".$r["Price"]."/-</span> </div>";
								echo"</td>";
								echo"<td style='padding-left:25px;'><input type='checkbox' name='checkbox".$id."' id='checkbox1' style='height:40px; width:40px; margin-top:70px;'></td>";
								echo"</tr>";
								echo"<input type='hidden' value='".$a."' name='mealid".$id."'>";	
								echo"<input type='hidden' value='".$r["Price"]."' name='priceid".$id."'>";
								echo"<input type='hidden' value='".$rdti1["DayAndTime_ID"]."' name='dtid".$id."'>";
								$id=$id+1;
							}
						?>
					</tbody>
				</table>
				
				<?php echo"<input type='hidden' value='".$_GET["day"]."' name='dayid' >";?>
			
			
			</div>
			<div style="width:400px; float:left; margin-left:30px; text-align:center;">
			<h2>Lunch</h2>
				<table>
					<thead>
						<th style="text-align:center; font-size:25px; padding:10px;">Meals</th>
						<th style="text-align:center; font-size:25px; padding:10px;">select</th>
					</thead>
					<tbody>
						<?php
							$rdti=$db->getDayTimeId($_GET["day"],"lunch");
							$rdti1=mysqli_fetch_array($rdti);
							$rdwd=$db->getDayWiseMealDetails($rdti1["DayAndTime_ID"]);
							
							while($rdwd1=mysqli_fetch_array($rdwd))
							{
								
								$a=$rdwd1["Meal_ID"];
								$rows=$db->getMealDetails($a);
								$r=mysqli_fetch_array($rows);
								echo"<tr>";
								echo"<td style='padding:15px;'>";
								echo"<div><img src='backfoot/".$r["ImagePath"]."' style='margin-bottom:20px; height:100px; width:200px;'/> <br> <span style='font-size:20px;  '>".$r["Name"]."</span> <br><span style='font-size:20px;'>Rs.".$r["Price"]."/-</span> </div>";
								echo"</td>";
								echo"<td style='padding-left:25px;'><input type='checkbox' name='checkbox".$id."' id='checkbox1' style='height:40px; width:40px; margin-top:70px;'></td>";
								echo"</tr>";
								echo"<input type='hidden' value='".$a."' name='mealid".$id."'>";	
								echo"<input type='hidden' value='".$r["Price"]."' name='priceid".$id."'>";
								echo"<input type='hidden' value='".$rdti1["DayAndTime_ID"]."' name='dtid".$id."'>";
								$id=$id+1;
							}
						?>
					</tbody>
				</table>
					
				<?php echo"<input type='hidden' value='".$_GET["day"]."' name='dayid' >";?>
			
			</div>
			<div style="width:400px; float:left; margin-left:30px; text-align:center;">
			<h2> dinner</h2>
				<table>
					<thead>
						<th style="text-align:center; font-size:25px; padding:10px;">Meals</th>
						<th style="text-align:center; font-size:25px; padding:10px;">select</th>
					</thead>
					<tbody>
						<?php
							$rdti=$db->getDayTimeId($_GET["day"],"dinner");
							$rdti1=mysqli_fetch_array($rdti);
							$rdwd=$db->getDayWiseMealDetails($rdti1["DayAndTime_ID"]);
						
							while($rdwd1=mysqli_fetch_array($rdwd))
							{
								$a=$rdwd1["Meal_ID"];
								$rows=$db->getMealDetails($a);
								$r=mysqli_fetch_array($rows);
								echo"<tr>";
								echo"<td style='padding:15px;'>";
								echo"<div><img src='backfoot/".$r["ImagePath"]."' style='margin-bottom:20px; height:100px; width:200px;'/> <br> <span style='font-size:20px;'>".$r["Name"]."</span> <br><span style='font-size:20px;'>Rs.".$r["Price"]."/-</span> </div>";
								echo"</td>";
								echo"<td style='padding-left:25px; padding-right:10px;'><input type='checkbox' name='checkbox".$id."' id='checkbox1' style='height:40px; width:40px; margin-top:70px;'></td>";
								echo"</tr>";
								echo"<input type='hidden' value='".$a."' name='mealid".$id."'>";	
								echo"<input type='hidden' value='".$r["Price"]."' name='priceid".$id."'>";
								echo"<input type='hidden' value='".$rdti1["DayAndTime_ID"]."' name='dtid".$id."'>";
								$id=$id+1;
							}
						?>
					</tbody>
				</table>
				
				<?php echo"<input type='hidden' value='".$_GET["day"]."' name='dayid' >";?>
			</div>
			<div style="clear:both;"></div>
			</div>
			<?php
		}
	?>
	<div style="float:left;">
	<button type="submit" class="btn btn-default" name="next" style="background-color:orange; margin-top:50px; margin-bottom:50px; margin-left:600px; font-size:25px; padding:10px; color:white;">Next>></button>
	
	</div>
	
	<div style="clear:both;"></div>
	</div>
	</form>

<!-- ################################################################################################ -->
<?php include("footer.php");?>