<?php
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo 'Not Connected to the server';
	}
	if(!mysqli_select_db($con,'datatopool')){
		echo 'Database Not selected';
	}
	$name = $_POST['username'];
	$lastn = $_POST['LastName'];
	$age = $_POST['age'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$textar = $_POST['text'];
	$sql = "INSERT INTO pooldata (name,pass,email,lastname,age,text_ar) VALUES ('$name', '$pass', '$email', '$lastn', '$age', '$textar')";
	//header("refresh:2; url=welcome.php");
?>
<!DOCTYPE html>
<html>
<head lang="he">
	<meta charset="utf-8"/>
	<link href="csscard.css" rel="stylesheet" type="text/css"/>
	<title> איזור אישי	</title>
</head>
<body class="bodycard"> 
	<a href=""> <h1 class="c1ard"> איזור אישי </h1>
	<h2 class="c2ard">  השם שלך </h2>
	<h2 class="c3ard"> האימייל שלך </h2>
	<h2 class="c4ard"> ההודעה האחרונה שרשמת </h2>
	<?php 
		echo "<b class=b1card>-$name - $lastn</b>";
		echo "<b class=b2card>-$email</b>";
		echo "<b class=b3card>-$textar</b>";
	?>
</body>
</html>