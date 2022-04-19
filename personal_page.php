<?php
	session_start();
	$server = "localhost";
	$user = 'root';
	$password = '';
	$dbname = "wt1";

	$conn = mysqli_connect($server,$user,$password,$dbname);


	
	$_SESSION['username']=$username;
	$username=$_POST["username"];
	$_SESSION['username']=$username;
	$password=$_POST["password"];
	$fullname=$_POST["name"];
	$address=$_POST["addr"];
	$phno=$_POST["phone"];

	$var=$_SESSION['username'];
	if($password!=NULL)
	{
		$query = "insert into user_details (username,password,fullname,address,phno) values ('$username','$password','$fullname','$address','$phno')";

		mysqli_query($conn,$query);
	}
	

	$q1 = "select * from user_details where username='$var'";
	$res= mysqli_query($conn,$q1);
	$flag1=0;
	$flag2=0;
	$flag3=0;
	while(($row=mysqli_fetch_assoc($res))!=NULL)
	{
		if((int)$row["badge1"]==1)
			$flag1=1;
		if((int)$row["badge2"]==1)
			$flag2=1;
		if((int)$row["badge3"]==1)
			$flag3=1;

	}
	//$badge = "select from user_details badge1,badge2,badge3"

	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Page</title>
	<style>
		

	</style>
</head>
<body>
	<div class="per">
		
		<h3>
			<?php echo $username?>
		</h3>
		<label>Name</label><p>
			<?php echo $username?>
		</p>
		<label>Address</label><p>PES University</p>
	</div>
	<div class="badges">
		
	</div>
</body>
</html>