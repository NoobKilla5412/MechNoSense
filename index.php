<?php
$doc = "Home";
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
	<meta name="description" content="MechNoSense Robotics Home Page">
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
	<title>MechNoSense</title>
</head>

<body>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<h1 id="title123">
				MechNoSense Robotics<br /><img src="favicon.svg" height="250px" alt="Logo"/>
			</h1>
			<hr />
			<span class="names">Brandon, Liana, Ismael, Dane, Linnaea, Vibhav, Isaac, Grae, Matthew, Will, Linnaea</span>
			<hr />
			<!-- Navbar -->
			<?php include '.\navbar.php';?>
		</div>
		<h3 id="team">
			About Our Team:
		</h3>
		<p>
			Hello, we are MechNoSense, an FTC robotics team located in Linn County. We work on teaching robotics, business, and programming skills. We love all things robots!
		</p><br />
		<p>
			
		</p><br />
	</div>
</body>

</html>
