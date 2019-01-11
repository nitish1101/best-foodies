<?php
session_start();
include("DBModel.php");
$db=new DemoDBCode;
if(isset($_GET["op"]))
{
	
		if($_GET["op"]=="del")
		{
			$id=$_GET["id"];
			$r=$db->deleteDayWiseBooking($id);
			if($r>0)
			{
				header("Location:select-meal-submit.php?msg=delsuc");
			}
			else
			{
				header("Location:select-meal-submit.php?msg=delfail");
			}
		}
		else if($_GET["op"]=="save")
		{
			if(isset($_POST["Duration_id"]))
			{
				$duration=0;
				switch($_POST["Duration_id"])
				{
					case "Week":
					{
						$duration=7;	
						break;
					}
					case "Half Month":
					{
						$duration=15;
						break;
					}
					case "Month":
					{
						$duration=30;
						break;
					}
				}
		
				$day=date("w");
				echo $day;
				if($day==6)
				{
					$day=0;
				}
				else
				{
					$day=$day+1;
				}	
		
				$var=1;$monp=0;$tuep=0;$wedp=0;$thurp=0;$frip=0;$satp=0;$sunp=0;
				echo $_POST["day_id".$var];
				while(isset($_POST["day_id".$var]))
				{
					switch($_POST["day_id".$var])
					{
						case "Monday":
						{
							$monp=$monp+$_POST["price".$var];
							break;
						}
						case "Tuesday":
						{
							$tuep=$tuep+$_POST["price".$var];
							break;
						}
						case "Wednesday":
						{
							$wedp=$wedp+$_POST["price".$var];
							break;
						}
						case "Thursday":
						{
							$thurp=$thurp+$_POST["price".$var];
							break;
						}
						case "Friday":
						{
							$frip=$frip+$_POST["price".$var];
							break;
						}
						case "Saturday":
						{
							$satp=$satp+$_POST["price".$var];
							break;
						}
						case "Sunday":
						{
							$sunp=$sunp+$_POST["price".$var];
							break;
						}
				
					}
					$var=$var+1;
				}
				$totalp=0;
		
				for($x=1;$x<=$duration;$x++)
				{
					switch($day)
					{
						case 0:
						{
							$totalp=$totalp+$sunp;
							break;
						}
						case 1:
						{
							$totalp=$totalp+$monp;
							break;
						}
						case 2:
						{
							$totalp=$totalp+$tuep;
							break;
						}
						case 3:
						{
							$totalp=$totalp+$wedp;
							break;
						}
						case 4:
						{
							$totalp=$totalp+$thurp;
							break;
						}
						case 5:
						{
							$totalp=$totalp+$frip;
							break;
						}
						case 6:
						{
							$totalp=$totalp+$satp;
							break;
						}
					
					}
					if($day==6)
					{
						$day=0;
					}
					else
					{
						$day=$day+1;
					}
				}
		
				$date=$_POST["date_id"];
				$user=$_POST["userid"];
				$r=$db->insertBookingDetail($user,$date,$duration,$totalp);
				if($r>0)
				{
					$ab=$db->getBookingDetails();
					$abr=mysqli_fetch_array($ab);
					$Bid=$abr["Booking_Id"];
					$q=$db->updateDayWiseBooking($user,$Bid);
					header("Location:My-food-box.php?msgs=suc");
				}
				else
				{
					header("Location:select-meal-submit.php?msgs=suc");
				}
			}
			else
			{
				header("Location:select-meal-submit.php?msgs=durErr");
			}
		}
}




?>