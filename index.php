<?php
$doc = "Home";
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-H9Z681C9TH"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-H9Z681C9TH');
	</script>
	<meta charset="utf-8">
	<link rel="manifest" href="/manifest.json">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Hello, we are MechNoSense, an FTC robotics team located in Benton County. We work on teaching robotics, business, and programming skills.">
	<meta name="keywords" content="MechNoSense mechnosense robots robotics robot">
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.min.png">
	<script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/js.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Bootstrap JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="/style.css" />
	<title>MechNoSense</title>
</head>

<body>
	<div class="container-fluid">
		<!-- Navbar -->
		<?php include 'C:\wamp64\www\MechNoSense\navbar.php'; ?>
		<div class="jumbotron text-center">
			<h1 id="title123">
				MechNoSense Robotics<br /><img src="/favicon.svg" height="300px" alt="Logo" />
			</h1>
			<hr />
			<?php include 'C:\wamp64\www\MechNoSense\names.php'; ?>
		</div>
		<h3 id="team">
			About Our Team:
		</h3>
		<p>
			Hello, we are MechNoSense, an FTC robotics team located in Benton County. We work on teaching robotics,
			business, and programming skills. We love all things robots! Our team is committed to equity and diversity
			and welcomes all no matter skill level, past experience, or current ability. We are made up of 6-8th graders
			but are flexible and excited to meet new members. (Sign up here: <a href="/signup">Sign Up</a>)
		</p>
		<p>
			We have a relatively big and diverse bunch and have been in session for 5+ years. We have constantly made
			improvements over that time and are excited to continue to learn and grow together. Depending on recruitment
			size we have around 1-3 teams a year. Our name has been recently changed but has been a constant in past
			years and with a team of dedicated mentors, we plan on expanding our team growth and size. We hope you'll
			give us a chance to expand your horizons no matter the skill level. And we want to send a big thank you from
			the team behind MechNoSense.
		</p>
	</div>
	<?php include 'C:\wamp64\www\MechNoSense\footer.php'; ?>
</body>

</html>