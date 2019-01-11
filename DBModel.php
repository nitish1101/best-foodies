<?php
class DemoDBCode
{
	var $con;
	function __construct()
	{
		$this->con = mysqli_connect("localhost","root" ,"","BestFoodiesdb");
		
	}
	function insertDayTimeDetails($day, $time)
	{
		$i=mysqli_query($this->con,"insert into dayandtimedetails(Day_Name, Time ) values('$day', '$time')");
		return $i;	
	}
	function getDayTimeDetails($id)
	{
		$data=mysqli_query($this->con,"select * from dayandtimedetails where DayAndTime_ID='$id'");
		return $data;	
	}
	
	function getmanage_meal($name,$qty,$unit,$price,$image,$discr)
	{
		$r=mysqli_query($this->con,"insert into mealDetails(Name, Quantity ,Unit ,ImagePath, Description, Price) values('$name',$qty,'$unit','$image','$discr',$price)");
		return $r;
	}
	
	function getMealDetails($id)
	{
		$query="select * from mealDetails";
		if($id!=0)
		{
			$query=$query." where mealID='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;	
	}
	
	function checkAdminLogin($user, $pass)
	{
		$rows=mysqli_query($this->con,"select * from adminDetails where userName='$user' and password='$pass'");
		if($row=mysqli_fetch_array($rows))
		{
			return $row;
		}
		else
		{
			return 0;
		}
	}
	
	function updateManage_meal($id,$name,$qty,$unit,$price,$path,$discr)
	{
		
		$r=mysqli_query($this->con,"update mealDetails set Name='$name', Quantity='$qty' ,Unit='$unit' ,ImagePath='$path', Description='$discr', Price='$price' where mealID='$id'");
		return $r;
	}
	function deleteMealDetails($id)
	{
		$r=mysqli_query($this->con,"delete from mealDetails where mealID=$id");
		return $r;
	}
	function UpdatePassword($user,$newpass)
	{
		$r=mysqli_query($this->con,"update admindetails set password='$newpass' where username='$user'");
		return $r;
	}
	
	function getDayTimeDetails_id($day,$time)
	{
		$data=mysqli_query($this->con,"select * from dayandtimedetails where Day_name='$day' and Time='$time'");
		return $data;	
	}
	function insertDayWiseMeal_Details($id, $Mid)
	{
		$i=mysqli_query($this->con,"insert into daywisemeal_details(Id,Meal_ID) values('$id', '$Mid')");
		return $i;	
	}
	
	function insertBanner($banner, $path)
	{

		$i=mysqli_query($this->con,"insert into banner_details(banner,ImagePath) values('$banner', '$path')");
		return $i;		
	}

	function getBannerDetails($id)
	{
		$query="select * from banner_details";
		if($id!=0)
		{
			$query=$query." where bid='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;
	}
	function deleteBannerDetails($id)
	{
		$r=mysqli_query($this->con,"delete from banner_details where bid=$id");
		return $r;
	}
	function updateBannerDetails($id,$banner,$Image)
	{
		$r=mysqli_query($this->con,"update banner_details set banner='$banner' ,ImagePath='$Image' where bid='$id'");
		return $r;
	}

	function checkUserLogin($user, $pass)
	{
		$rows=mysqli_query($this->con,"select * from user_details where Email_Id='$user' and Password='$pass'");
		if($row=mysqli_fetch_array($rows))
		{
			return $row;
		}
		else
		{
			return 0;
		}
	}
	function updateUserPassword($user, $newpass)
	{
		$r=mysqli_query($this->con,"update user_details set Password='$newpass' where Email_Id='$user'");
		return $r;
	}
	function insertUserDetails($name,$address,$city,$pin,$contact,$email,$password)
	{
		$i=mysqli_query($this->con,"insert into user_details(Name,Address,City,Pin_Code,Contact,Email_Id,Password) values('$name','$address','$city','$pin','$contact','$email','$password')");
		return $i;
	}
	function getUserDetails($email)
	{
		$r=mysqli_query($this->con,"select * from user_details where Email_Id='$email'");
		return $r;
	}
	function getUserImage($user)
	{
		$rows=mysqli_query($this->con,"select * from user_image where Email_Id='$user'");
		if($row=mysqli_fetch_array($rows))
		{
			return $row;
		}
		else
		{
			return 0;
		}
	}
	function insertUserImage($user,$path)
	{
		$r=mysqli_query($this->con,"insert into User_image(Email_Id,ImagePath) values('$user','$path')");
		return $r;
	}
	function updateUserImage($user,$path)
	{
		$r=mysqli_query($this->con,"update User_image set ImagePath='$path' where Email_Id='$user'");
		return $r;
	}
	function UserDetails($id)
	{
		$query="select * from user_details ";
		if($id!=0)
		{
			$query=$query." where User_Id='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;	
	}
	function getDayTimeId($day,$time)
	{
		$data=mysqli_query($this->con,"select * from dayandtimedetails where Day_Name='$day' and Time='$time'");
		return $data;	
	}
	
	function getDayWiseMealDetails($id)
	{
		$data=mysqli_query($this->con,"select * from daywisemeal_details where ID='$id'");
		return $data;	
	}
	function updateprofile($email,$name,$address,$city,$Pin,$contact)
	{
		$r=mysqli_query($this->con,"update user_details set Name='$name',Address='$address',City='$city',Pin_Code='$Pin',Contact='$contact' where Email_Id='$email'");
		return $r;
	}
	function insertDayWiseBooking($user,$dtid,$mealid,$cost)
	{
		$r=mysqli_query($this->con,"insert into day_wise_booking(User_ID,DayTime_Id,Meal_Id,cost) values('$user','$dtid','$mealid','$cost')");
		return $r;
	}
	function getDayWiseBooking($user)
	{
		$r=mysqli_query($this->con,"select *from day_wise_booking where User_ID='$user' and Booking_Id=0" );
		return $r;
	}
	function deleteDayWiseBooking($id)
	{
		$r=mysqli_query($this->con,"delete from day_wise_booking where Dwb_Id='$id'" );
		return $r;
	}
	
	function insertBookingDetail($user,$date,$duration,$totalp)
	{
		$r=mysqli_query($this->con,"insert into booking_details(User_ID,Date,Days,Toatal_amt) values('$user','$date','$duration','$totalp')");
		return $r;
	}
	function updateDayWiseBooking($user,$id)
	{
		$r=mysqli_query($this->con," update day_wise_booking set Booking_Id='$id' where User_ID='$user' and Booking_Id='0'");
		return $r;
	}
	function getBookingDetails()
	{
		$r=mysqli_query($this->con," Select *from booking_details order by Booking_Id desc limit 1");
		return $r;
	}
	function getUserBookingDetails($id)
	{
		$r=mysqli_query($this->con," Select *from booking_details where User_ID='$id'");
		return $r;
	}
	function getDaywiseBookingByid($id)
	{
		$data=mysqli_query($this->con,"select * from day_wise_booking where Booking_Id='$id'");
		return $data;	
	}
	
	function insertFeedbackDetails($id,$date,$meal,$fb)
	{
		$i=mysqli_query($this->con,"insert into feedback_details(User_Id,Date,Meal,Feedback) values('$id','$date','$meal','$fb')");
		return $i;	
	}
	
	function breakfast()
	{
		$data=mysqli_query($this->con,"select DISTINCT Meal_ID From daywisemeal_details where ID=13 or ID=10 or ID=16 or Id=25 or ID=22 or ID=7 or Id=19");
		return $data;
	}
	function lunch()
	{
		$data=mysqli_query($this->con,"select DISTINCT Meal_ID From daywisemeal_details where ID=14 or ID=11 or ID=17 or Id=26 or ID=23 or ID=8 or Id=20");
		return $data;
	}
	function Dinner()
	{
		$data=mysqli_query($this->con,"select DISTINCT Meal_ID From daywisemeal_details where ID=15 or ID=12 or ID=21 or Id=9 or ID=24 or ID=27 or Id=18");
		return $data;
	}
}
?>