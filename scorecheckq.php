<?php
	session_start();
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="wt1";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	$a1=$_GET["Q1"];
	$a2=$_GET["Q2"];
	$a3=$_GET["Q3"];
	$a4=$_GET["Q4"];
	$a5=$_GET["Q5"];

	$score=0;
	
	$query="SELECT queue FROM qanswers";
	$res=mysqli_query($conn,$query);
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a1)
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a2) 
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a3) 
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a4) 
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a5)
		$score++;


	if($score>3)
		$badge2=1;
	else
		$badge2=0;
	$q1 = "insert into user_details (q_sc,badge2) values ('$score','$badge2') where username='$_SESSION['username']'";
	$rec = mysqli_query($conn,$q1);
?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
		<style type="text/css">
			body{font-family:"Raleway"; background-color: black; }
			div{display: inline-block;}
			p{position: absolute; top:200px;left:500px; font-size: 70px;color:#21aec6; }
			#d{position: absolute; top:350px; left:650px; font-size:70px;color:#21aec6; }
			#out{position: absolute;top:350px;left:700px; font-size:70px;color:#21aec6; }
			#score{position: absolute;top:350px;left:590px; font-size:70px;color:#21aec6; }
			button{height: 50px; background-color: #21aec6; font-size:15px }
		</style>
	</head>
	<body>
		<p><strong>You Scored:</strong></p>
		<div id="score"></div>
		<div id="d">/</div>
		<div id="out">5</div>
		<button style="position: absolute; top: 600px;left:500px;"><a href="qquiz.php" style="text-decoration:none;">Take the Test Again?</a></button>
		<button style="position: absolute; top: 600px;left:700px">Back to Queues</button>
		<script type="text/javascript">
			var x="<?php echo $score?>";
			x=parseInt(x);
			y=document.querySelector("#score");
			y.innerHTML=x;

		</script>
	</body>
</html>
