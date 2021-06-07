<?php
	$message = $_POST['Message'];
	/*if($_POST['Message']){
	mail("tck945@gmail.com", "אתר",
	$_POST["אהלן בקשר לאתר"]. "From: gooto786@gmail.com");
	}*/
	mail('tck945@gmail', 'My Subject', $message);
?>