<?PHP include("header.php");?>
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
	<form method="post" action="select-meal-submit-controller.php?op=save">
	<div>
		<div style="margin-top:40px; margin-bottom:40px;">
		<label for="Dayname" style="margin-left:200px; font-size:25px;"> Service Duration:</label> 
		
		<div style="margin-right:950px; width:100px; float:right;">
		<select style=" font-size:20px;" name="Duration_id">
		<option selected disabled hidden>Duration</option>
		<option>Week</option>
		<option>Half Month</option>
		<option>Month</option>
		</select>
		</div>
		<div style="clear:both;">
		</div>
		</div>
	
	<div style="padding:40px;">
		<table>
		<thead>
			
			<th style="padding:10px; font-size:15px;">Meal</th>
			<th style="padding:10px; font-size:15px;">Name</th>
			<th style="padding:10px; font-size:15px;">Date</th>
			<th style="padding:10px; font-size:15px;">Day</th>
			<th style="padding:10px; font-size:15px;">Timing</th>
			<th style="padding:10px; font-size:15px;">Price</th>
			<th></th>
		</thead>
		<tbody>
		<?php
			$u=$_SESSION["UserSess"];
			$usr=$db->getUserDetails($u);
			$ru=mysqli_fetch_array($usr);
			$user=$ru["User_Id"];
			$rsm=$db->getDayWiseBooking($user);
			$x=1;
			while($rsmb=mysqli_fetch_array($rsm))
			{
				$a=$rsmb["DayTime_Id"];
				$b=$db->getDayTimeDetails($a);
				$br=mysqli_fetch_array($b);
				
				$mid=$rsmb["Meal_Id"];
				$meld=$db->getMealDetails($mid);
				$meldr=mysqli_fetch_array($meld);
				
				echo"<tr><td style='padding:20px;'><img src='backfoot/".$meldr["ImagePath"]."' style='height:100px; width:200px;'></td>";
				echo"<td style='padding-left:20px; padding-top:40px;'>".$meldr["Name"]."</td>";
				echo"<td style='padding-left:20px; padding-top:40px;'>".date("d/m/20y")."</td>";
				echo"<td style='padding-left:20px; padding-top:40px;'>".$br["Day_Name"]."</td>";
				echo"<td style='padding-left:20px; padding-top:40px;'>".$br["Time"]."</td>";
				echo"<td style='padding-left:20px; padding-top:40px;'>".$rsmb["cost"]."</td>";
				echo"<td style='padding-left:20px; padding-top:40px;'><a href='select-meal-submit-controller.php?op=del&id=".$rsmb["Dwb_Id"]."' style='color:red; font-size:20px;'>Remove</a></td></tr>";
				echo"<input type='hidden' value='".$rsmb["cost"]."' name='price".$x."'>";
				echo"<input type='hidden' value='".$user."' name='userid'>";
				echo"<input type='hidden' value='".date("d/m/20y")."' name='date_id'>";
				echo"<input type='hidden' value='".$br["Day_Name"]."' name='day_id".$x."'>";
				$x=$x+1;
			}
			
		?>
		</tbody>
		</table>
		<div><button type="submit" class="btn btn-default" name="next" style="background-color:orange; margin-top:50px; margin-bottom:50px; margin-left:650px; font-size:25px; padding:10px; color:white;">Submit</button></div>
	</div>
	</form>
	</div>
<?PHP include("footer.php");?>