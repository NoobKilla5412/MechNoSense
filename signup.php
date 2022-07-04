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
	<meta name="keywords" content="MechNoSense mechnosense robots robotics robot">
	<link rel="icon" type="image/ico" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.png">
	<script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/js.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Bootstrap JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/style.css" />
	<!-- Custom CSS -->
	<title>Sign Up &#8211; MechNoSense</title>
</head>

<body>
	<div class="container-fluid" style="margin-bottom: 1rem;">
		<!-- Navbar -->
		<?php include 'C:\wamp64\www\MechNoSense\navbar.php';?>
		<div class="jumbotron text-center">
			<h1 id="title123">
				Sign Up for Our Team
			</h1>
			<hr />
			<?php include 'C:\wamp64\www\MechNoSense\names.php';?>
			<hr />
		</div>
		<?php if (isset($_GET['error'])) { ?>
		<span class="error">
			<?= htmlspecialchars($_GET["error"]); ?>
		</span>
		<?php } ?>
		<form action="/signup_data.php" method="post">
			<div class="input-group">
				<label for="first" class="text">First Name</label>
				<input type="text" id="first" name="first" class="input-group" style="background-color: #185020;"
					required pattern="[^,<>]*" max="20"><br />
				<label for="last" class="text">Last Name</label>
				<input type="text" id="last" name="last" class="input-group" style="background-color: #185020;" required
					pattern="[^,<>]*" max="25"><br />
			</div>
			<div class="input-group">
				<label for="email" class="text">Enter your email:</label><br />
				<input type="email" id="email" name="email" class="input-group" style="background-color: #185020;"
					required pattern="[^,<>]*" max="40"><br />
				<label for="phone" class="text">Enter your phone number:</label><br />
				<input type="tel" class="input-group" id="phone" name="phone" style="background-color: #185020;"
					placeholder="123-456-7890" pattern="^[(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4}$"
					required><br /><br />
			</div>
			<br />
			<div style="display: flex;flex-direction: column;">
				<input type="submit" value="Submit" class="btn btn-default" style="background-color: #185020;">
			</div>
		</form>
	</div>
	<?php include 'C:\wamp64\www\MechNoSense\footer.php'; ?>
</body>

</html>