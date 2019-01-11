<?PHP include("header.php");?>
<div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">My food Box</a></li>
		
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div >
			<div style="padding:60px;">
								<table >
													<thead>
														<tr style="position:relative;">
														<th style='padding-left:50px;'>Meal </th>
														<th style='padding-left:50px;'>Name</th>
														<th style='padding-left:50px;'>Day </th>
														<th style='padding-left:50px;'>Timing</th>
														<th style='padding-left:50px;'>Price</th>
														
														</tr>
													</thead>
		
													<tbody>
		
													<?php
													
													$id=$_GET["id"];
													$rows=$db->getDaywiseBookingByid($id);
													while($r=mysqli_fetch_array($rows))
													{
															$dtid=$r["DayTime_Id"];
															$a=$db->getDayTimeDetails($dtid);
															$ar=mysqli_fetch_array($a);
															
															$mid=$r["Meal_Id"];
															$b=$db->getMealDetails($mid);
															$br=mysqli_fetch_array($b);
															echo"<tr>";
															echo"<td style='padding:10px;'><img src='backfoot/".$br["ImagePath"]."' style='height:100px; width:200px;'></td>";
															echo"<td style='color:black; padding:20px;'>".$br["Name"]."</td>";
															echo"<td style='color:black; padding:20px;'>".$ar["Day_Name"]."</td>";
															echo"<td style='color:black; padding:20px;'>".$ar["Time"]."</td>";
															echo"<td style='color:black; padding:20px;'>Rs.".$br["Price"]."/-</td>";
															echo"</tr>";
													}
													
													
													?>
		
													</tbody>
		
												</table>
												<div style="padding:30px; margin-left:600px;">
												<a href="my-food-box.php" style="font-size:30px;background-color:#3aacec;color:white;padding:10px; border-radius:10px;">Back </a>
												</div>								
			</div>
<?PHP include("footer.php");?>