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
				<div style="padding:100px;">
					<table>
						<thead>
							<th style="font-size:20px; padding:10px;">Booking Id</th>
							<th style="font-size:20px; padding:10px;">Order Date</th>
							<th style="font-size:20px; padding:10px;">Service Duration</th>
							<th style="font-size:20px; padding:10px;">Total Amount</th>
							<th></th>
						</thead>
						<tbody>
							<?php
								$user=$_SESSION["UserSess"];
								$k=$db->getUserDetails($user);
								$kr=mysqli_fetch_array($k);
								$id=$kr["User_Id"];
								$a=$db->getUserBookingDetails($id);
								while($ar=mysqli_fetch_array($a))
								{
									echo"<tr>";
									echo"<td style='padding:10px; font-size:20px;'>".$ar["Booking_Id"]."</td>";
									echo"<td style='padding:10px; font-size:20px;'>".$ar["Date"]."</td>";
									echo"<td style='padding:10px; font-size:20px;'>".$ar["Days"]."  Days</td>";
									echo"<td style='padding:10px; font-size:20px;'> Rs.".$ar["Toatal_amt"]."/-</td>";
									echo"<td style='padding:10px; font-size:20px; '><a href='details.php?id=".$ar["Booking_Id"]."' style='color:#3aacec;' >View details</a></td>";
									echo"</tr>";
								}
							
							?>
						</tbody>
					</table>
				</div>
<?PHP include("footer.php");?>

