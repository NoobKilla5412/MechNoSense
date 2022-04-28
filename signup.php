<?php
$doc = "Sign Up";
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-VC2S111058"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-VC2S111058');
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="MechNoSense mechnosense robots robotics robot">
	<link rel="icon" type="image/ico" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="./favicon.png">
	<script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="/style.css" />
	<!-- Custom CSS -->
	<title>Sign Up &#8211; MechNoSense</title>
</head>

<body>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<h1 id="title123">
				Sign Up for Our Email List
			</h1>
			<hr />
			<span class="names">Brandon, Liana, Ismael, Dane, Linnaea, Vibhav, Isaac, Grae, Matthew, Will, Linnaea</span>
			<hr />
			<!-- Navbar -->
			<?php include '.\navbar.php';?>
		</div>
		<form action="signup.php" method="post">
			<div class="input-group">
				<span class="text">What is your name?</span><br />
				<label for="first" class="text">First Name</label>
				<input type="text" id="first" name="first" class="input-group" style="background-color: #185020;" required><br />
				<label for="last" class="text">Last Name</label>
				<input type="text" id="last" name="last" class="input-group" style="background-color: #185020;" required><br />
			</div>
			<div class="input-group">
				<span class="text">What is your email?</span><br />
				<input type="email" id="email" name="email" class="input-group" style="background-color: #185020;" required><br/><br />
			</div>
			<input type="submit" value="Submit" class="btn btn-default" style="background-color: #185020;">
		</form>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
</body>

</html>