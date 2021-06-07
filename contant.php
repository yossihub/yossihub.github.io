<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con){
		echo 'Not Connected to the server';
	}
	if(!mysqli_select_db($con,'datatopool')){
		echo 'Database Not selected';
	}
	
	$nam = $_POST['name'];
	$sub = $_POST['subject'];
	$textarea = $_POST['textt'];
	$sql = "INSERT INTO contant (name, subject, textar) VALUES ('$nam', '$sub', '$textarea')";
	
	header("refresh:3; url=welcome.php");
		if(!mysqli_query($con,$sql)){	
			echo 'OOPSS.... Your message is Invalid, Please try again!';
	}
	
	echo "תודה רבה על הודעתך אקרא אותה  בימים בקרובים
	זאתי ההודעה שלך:
	$textarea
	";
?>