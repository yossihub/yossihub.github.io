<?php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$email = $_POST["email"];

	if(isset($user) && isset($pass)){
		if($user == "admin" && $pass == "2001" && $email == "admin@gmail.com"){
			echo '<div class=col_log dir="rtl">	
			<a> ברוך הבא מנהל/ת, מוזמן לבצע שינויים דרך המסד נתונים של אתר זה
			דרך קישור זה: <br/>
			למעבר לבסיס הנתונים לחץ כאן -->: <a href=http://localhost:8012/phpmyadmin/ target=blank> מסד נתונים
			</a>
				</div>';	
			 echo "<strong> Welcome $user! </strong> <br/>"; 
		}
		else{
			echo "Welcome $user <br/>";
		}
		echo "<br/>";
		echo "Your ip addess is: " .$_SERVER["REMOTE_ADDR"];
		echo "<br/>";
	}
	else{
		echo "Wrong parameter specified, Please change the vlaue: $user <br/>";
	}
	echo "<br/>";
	echo "-Your Email is: $email <br/> -Your name is: $user <br/>";
	
	echo "----------- The time is is: ------------- <br/>";
	date_default_timezone_set("Asia/Jerusalem");
	echo date("h:i:s a");
	echo "<br/>";
?>
<html lang="he">
<head>
	<link rel="stylesheet" href="font/css/all.min.css"> 
	<link href="cssweb.css" rel="stylesheet" type="text/css"/>
</head>
<h1 dir="rtl"> 
תודה על הרשמתכם לחצו על הקישור הבא בכדי להמשיך גלישתכם באתר.
יום טוב והמשך גלישה נעימה באתר
-----
בברכה מנהל האתר יוסי.
</h1>
<br/> <br/>
<div class="linkt">
	<a href="http://localhost:8012/project/website.html"> <input class="sendt" type="submit" value="כנס לאתר"> </a> </input>
</div>
<script>
	//alert("נרשמתם לאתר בהצלחה!");
</script>
<body style="background-image:url('Swim.png');">
<hr/>
<br/>
<fieldset>
	<legend align="center"> Login From </legend>
		<form dir="ltr" action="phpweb.php" method="post">
			Username: <input type="text" name="username" required
			placeholder="username" autofocus> </input> <br/>
			Password: <input type="password" name="password" required
			placeholder="password"> </input> <br/>
			Email: <input type="text" name="email" required
			placeholder="email"> </input> <br/>
			<hr/>
			<p align="center" class="login_in"> שלח כאן </p> <br/>
			<div align="center" class="sere">
			<input type="submit" class="send" value="שלח">
			<input type="reset" class="reset" value="איפוס">
			</div>
		</form>
</fieldset>
<h3 align="center"> לעדכונים ומדריכים מוזמנים לצפות באחד הסרטונים בערוץ היוטיוב שלי </h3>
<iframe src="https://youtu.be/f9QIgQ64Ycw" name="iframe_a" title="Iframe Example"></iframe>
<p> <a align="center" href="https://youtu.be/f9QIgQ64Ycw" target="iframe_a"> Youtube </a> </p>
<hr/>
<footer>
	<h4 align="center"> מוזמנים להשאיר לי הודעה </h4>
	<p align="center"> <textarea align="left" name="massage" value="שלח הודעה"> השאיר הודעה כאן </textarea> </p>
</footer>
</body>
</html>