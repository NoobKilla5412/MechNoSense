<?php
	$path = "../data.csv";
	if (!empty($_POST["first"]) && !empty($_POST["last"]) && !empty($_POST["email"]) && !empty($_POST["phone"])) {
	
	$fh = fopen($path,"a+");
	$string = "\n\"".strip_tags($_POST["first"])."\",\"".strip_tags($_POST["last"])."\",\"".strip_tags(filter_var($_POST["email"],FILTER_SANITIZE_EMAIL))."\",\"".strip_tags($_POST["phone"])."\"";
	fwrite($fh,$string); // Write information to the file
	fclose($fh); // Close the file
	header("Location: /signup/");
	}else{
		header("Location: /signup/?error=Completely fill out the form.");
	}
?>