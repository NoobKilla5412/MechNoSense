<?php
	$path = "../data.csv";
	if (isset($_POST["first"]) && isset($_POST["last"]) && isset($_POST["email"])) {
	
	$fh = fopen($path,"a+");
	$string = "\n".strip_tags($_POST["first"])." , ".strip_tags($_POST["last"])." , ".strip_tags($_POST["email"]);
	fwrite($fh,$string); // Write information to the file
	fclose($fh); // Close the file
	header("Location: /signup");
	}
?>