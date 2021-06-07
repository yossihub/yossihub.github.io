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
	if($name == "yossi" && $lastn == "shahav"){
		//header ("location:welcome.php");
		echo "
		<html>
		<head lang=he>
			<meta charset=utf-8/>
			<title> אתר למנהל </title>
			<b class=bregis> להלן קישור לאחסון--> </b> <a href=http://localhost:8012/phpmyadmin/sql.php?db=datatopool&table=pooldata&pos=0 class=aregis> קישור לאחסון </a>	
		</head>
		</html>
		";
	}
	if($age >= 18 && $age <= 100 && strlen((string)$pass) >= 7 && strlen((string)$pass) <= 50){
		//$sql = "INSERT INTO pooldata (name,pass,email,lastname,age,text_ar) VALUES ('$name', '$pass', '$email', '$lastn', '$age', '$textar')";
		$sql = "INSERT INTO pooldata (name,pass,email,lastname,age) VALUES ('$name', '$pass', '$email', '$lastn', '$age')";
		//echo 'Your name and password is inserted in the database <br>';
		//"refresh:2;
		//header("url=website.html");
		//echo '<br/>';
		//echo "Your name is: $name <br/> and Your Email is: $email";
		if(!mysqli_query($con,$sql)){	
			echo 'OOPSS.... Your name or password is Invalid, Please try again!';
		}
		echo "<h3 class=h3web> Welcome User </h3> <a class=nameweb href=http://localhost:8012/project/cardprofile.php> - $name - $lastn </a> 
			<a href=http://localhost:8012/project/website.html class=logor> Log Out </a>
			<html>
			<head>
				<title> PoolSwimsuit-אתר בגדים </title>
			</head>
			</html>
			";
	}	
	else{
		echo "<br> <br>OOPSS, Your password is not validate for this web, you need to write password up than 6 numbers! <br>";
		echo "You can't to registration to this web because your age is '$age' <br/>";
		echo 'Your name and password is NOT inserted in the database';
	}
	//$sql = "INSERT INTO pooldata (name,pass,email,lastname,age) VALUES ('$name', '$pass', '$email', '$lastn', '$age')";
	//header("refresh:2; url=welcome.php");
/*echo "<h3 class=h3web> Welcome User </h3> <a class=nameweb href=http://localhost:8012/project/cardprofile.php> - $name - $lastn </a> 
<a href=http://localhost:8012/project/website.html class=logor> Log Out </a>
<html>
<head>
	<title> PoolSwimsuit-אתר בגדים </title>
</head>
</html>
";*/
?>
<!DOCTYPE html>
<html lang="he">
<head>
<meta charset="utf-8"/>
<script src="sweetalert2.min.js"> </script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css /">
<link rel="stylesheet" href="font/css/all.min.css"> 
<link href="cssweb.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="jaco.js"></script>
	<title> PoolSwimsuit-אתר הבגדים הגדול במדינה </title>
</head>
<body>
<!--<a class="atoregis" href="http://localhost:8012/project/regis.html"> להתחברות </a>
<p class="tagp"> תאריך יומי </p> <p id="date" class="datet"> </p>
	<div class="photo">!-->
		<a href="http://localhost:8012/project/website.html"> <img src="Sw12.png"> </a>
		<!--<span class="text"> PoolSwimsuit </span>
		<span class="text2"> האתר הקיצי של המדינה </span> !-->
	</div>
	<br/>
	<div class="Category">
		<ul>
			<li class="top"> <a> <i class="fas fa-male"> גברים </i> </a> </li>
			<li class="line-item"> <a href="http://localhost:8012/project/website.html">  מכנסיים </a> </li>
			<li class="line-item"> <a href="http://localhost:8012/project/website.html"> חולצות </a> </li>
			<li class="line-item"> <a href="http://localhost:8012/project/website.html"> אביזרי חורף </a> </li>
		</ul>
		<ul>
			<li class="top"> <a> <i class="fas fa-male"> נשים </i> </a> </li>
			<li class="line-item"> <a href="http://localhost:8012/project/womenshop.html"> מכנסיים </a> </li>
			<li class="line-item"> <a href="http://localhost:8012/project/womenshop.html"> חולצות </a> </li>
			<li class="line-item"> <a href="http://localhost:8012/project/womenshop.html"> הלבשה תחתונה </a> </li>
		</ul>
		<ul>
			<li class="top"> <a href="http://localhost:8012/project/contant.html"> <i class="fas fa-phone-alt"> צור קשר </i> </a> </li>
		</ul>
		<ul>
			<li class="top"> <a href="http://localhost:8012/project/about.html"> <i class="fas fa-address-card"> אודות </i> </a> </li>
		</ul>
		<ul>
			<li class="top"> <a href="http://localhost:8012/project/regis.html"> <i class="fas fa-user-circle"> הרשמה </i> </a> </li>
		</ul> 
		<ul>
			<li class="top"> <a href="http://localhost:8012/project/login.html"> <i class="fas fa-sign-in-alt"> התחברות </i> </a> </li>
		</ul>
	</div>
	<div class="search-box">
			<input class="search-txt" type="search" placeholder="חיפוש"> </input>
			<a class="fas fa-search" href="#"> </a>
	</div>
</div>
</body>
<br> <br> <br> <br> <br>
<body>
	<marquee dir="rtl">
		<nav class="marq1">
			ברוכים הבאים לאתר הקיצי הגדול במדינה!
			<h3> כאן תוכלו למצוא בגדים גם לגברים וגם לנשים </h3>
			<h2> לעוד פרטים ורכישה מוזמנים למצוא באתר </h2>
			<a href="http://localhost:8012/project/website.html" class="salet"> למבצעי החודש </a>
		</nav>
	</marquee>
<!-- This Tags product and button !-->
	<div class="wrapper">
		<h1 class="linedes"> <a href="http://localhost:8012/project/website.html" class="amen"> PoolSwimsuit Store Men </a> </h1>
		<div class="clear"> </div>
		<div class="items">
			<div class="item">
				<a href="pr1.jfif" target="_blank"> <img src="pr1.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt">
				מכנס לים מהדורה מוגבלת! 
				<br>
				דגם אדיסניק
				</h2>
				<p class="pt"> Price 400$ </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add To Cart 
				</button> <br>
				<button class="sweb"> S </button>
				<button class="sweb"> M </button>
				<button class="sweb"> L </button>
				<button class="sweb"> XL </button>
			</div>
			<div class="item">
				<a href="pr2.jfif" target="_blank"> <img src="pr2.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt">
				מכנס לים מהדורה מוגבלת! 
				<br>
				המכנס שכובש את ישראל נחת אצלנו בחנות!!!
				</h2>
				<p class="pt"> Price 200$ </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add To Cart 
				</button> <br>
				<button class="sweb"> S </button>
				<button class="sweb"> M </button>
				<button class="sweb"> L </button>
				<button class="sweb"> XL </button>
			</div>
			<div class="item">
				<a href="pr7.jfif" target="_blank"> <img src="pr7.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt"> 
				מכנס לים מהדורה מוגבלת!
				<br>
				כל החברים שלך יקנאו אם תלבש את זה!
				</h2>
				<p class="pt"> Price 350$ </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add To Cart 
				</button> <br>
				<button class="sweb"> S </button>
				<button class="sweb"> M </button>
				<button class="sweb"> L </button>
				<button class="sweb"> XL </button>
			</div>
			<div class="item">
				<a href="pr5.jfif" target="_blank"> <img src="pr5.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt">
				מכנס לים מהדורה מוגבלת!
				<br>
					דגם פאפא
				</h2>
				<p class="pt"> Price 100$ </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add to cart  
				</button> <br>
				<button class="sweb"> S </button>
				<button class="sweb"> M </button>
				<button class="sweb"> L </button>
				<button class="sweb"> XL </button>
			</div>
			<div class="item">
				<a href="pr10.jfif" target="_blank"> <img src="pr10.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt">
				מכנס לים מהדורה מוגבלת!
				<br>
					דגם שאפא
				</h2>
				<p class="pt"> Price 90$ </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add to cart  
				</button> <br>
				<button class="sweb"> S </button>
				<button class="sweb"> M </button>
				<button class="sweb"> L </button>
				<button class="sweb"> XL </button>
			</div>
			<div class="item">
				<a href="pr11.jfif" target="_blank"> <img src="pr11.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt">
				מבצעים חדשים בקרוב
				<br>
					
				</h2>
				<p class="pt">  </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add to cart  
				</button> <br>
				<b> </b>
			</div>
			<div class="item">
				<a href="https://www.youtube.com/c/Technolinux" target="_blank"> <img src="pr13.jfif"> </a> <br>
				<h2 dir="rtl" align="center" class="pt">
				מוזמנים להיכנס לערוץ יוטיוב שלי שם אני מלמד תכנים של סייבר ומחשבים
				<br>
					
				</h2>
				<p class="pt">  </p>
				<button class="fas fa-cart-plus" type="button" onclick="clickh()">
					Add to cart  
				</button> <br>
				<b>  </b>
			</div>
		</div>
	</div>
	<a href="http://localhost:8012/project/website.html" class="a1web">-עמוד 1</a>
	<a href="http://localhost:8012/project/womenshop.html" class="a2web">-עמוד 2</a>
<footer class="footer-text">
	<h4 class="h4-website"> מוזמנים להשאיר לי הודעה </h4> <br>
<form action="savefile.php" method="post">
	<p align="center"> <textarea id="text_ar" class="textarea1" name="textt" placeholder="השאיר כאן הודעה" dir="rtl"></textarea> </p>
	<p align="center"> <button class="send-text" onclick="massege()"> <strong> שלח </strong> </button> </p>
	<h6 class="design-h6"> © 2020-2021 כל הזכויות שמורות ליוסי שחב © </h6>
</form>
<div class="divwebpay">
	<h1 class="h1webb"> :אנו מקבלים תשלומים באמצעות </h1>
	<a href="https://www.poalimsites.co.il/bit/index.html" target="_blank"> <img src="bit.jfif" class="bitpict"> </a>
	<a href="shorturl.at/imGLS" target="_blank"> <img src="pay.jfif" class="bitpict"> </a>
	<a href="shorturl.at/itDL3" target="_blank"> <img src="tran.jfif" class="bitpict"> </a>
	<img src="em.jfif" class="bitpict" onclick="empay()">
</div>
</footer>
</body>
<br>
</html>