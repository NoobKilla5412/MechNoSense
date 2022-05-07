<?php
$doc = "Videos";
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Bootstrap JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/style.min.css"/>
	<!-- Custom CSS -->
	<title>Videos &#8211; MechNoSense</title>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<!-- Navbar -->
			<?php include '..\navbar.php';?>
			<br />
			<h1 id="title123">
				Videos
			</h1>
			<hr/>
			<span class="names">Brandon, Liana, Ismael, Dane, Linnaea, Vibhav, Isaac, Grae, Matthew, Will</span>
			<hr/>
		</div>
		<a href="IMG_3118.mp4" target="_blank">View in new tab</a><br />
		<video width="50%" controls>
			<source type="video/mov"src="IMG_3118.mov"/>
			<source type="video/mp4"src="IMG_3118.mp4"/>
		</video>
	</div>
</body>

</html>
