<?php $doc = "Home";?>
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
			<?php file_get_contents("/navbar.php");?>
		</div>
			<main>
				<h3 id="team">
					About Our Team:
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu magna euismod, posuere mauris a, mattis nibh. Integer finibus ut lorem vel posuere. Aliquam erat volutpat. Ut convallis quam ac placerat pellentesque. Aliquam nec urna ultricies, varius risus sit amet, mattis lectus. Donec varius urna sed magna bibendum dignissim. Phasellus vitae neque at odio mollis iaculis. Nunc lorem orci, consequat at nulla quis, lacinia luctus tortor. Donec ultricies dolor at urna laoreet semper. Fusce tincidunt nibh nec magna tincidunt, non congue nulla pretium.
				</p><br/>
				<p>
					Pellentesque ac urna risus. Morbi ut dolor eget sapien rhoncus elementum. In fringilla aliquet lacus. Quisque dictum consequat velit. Sed vitae lacus tempus, fermentum diam in, posuere erat. Nam facilisis placerat lacus, eu varius ex maximus id. Morbi laoreet bibendum pulvinar. Vivamus a lorem mi. Donec mollis ex et dui venenatis malesuada. Fusce quis tincidunt ex, a imperdiet urna. Sed luctus sed odio pretium accumsan. Phasellus a consequat justo. Fusce sollicitudin velit lobortis erat facilisis vulputate vel at eros. Quisque dignissim purus urna, vel sollicitudin tortor tristique vel. Aliquam eu ullamcorper nisi, ut tincidunt magna.
				</p><br/>
				<p>
					Suspendisse vitae placerat quam. Proin quis ex ac sem feugiat gravida ac sit amet urna. Vestibulum aliquet neque et felis mollis scelerisque. Donec sit amet pellentesque mauris. Nam non enim sapien. Aliquam tempus est quis neque finibus, sit amet convallis velit condimentum. Nullam lectus felis, porta sit amet rutrum id, varius ultricies nisl. Aenean quis accumsan enim.
				</p><br/>
				<p>
					Fusce sit amet justo sed ante varius convallis. Morbi dapibus scelerisque ex. Sed commodo tellus non libero tempor interdum. Quisque sollicitudin odio in ex placerat accumsan. Morbi vel augue vel dui imperdiet lobortis. Donec at enim interdum, ultricies dui quis, euismod leo. Cras tincidunt tellus tristique metus cursus lacinia. Nam mi risus, fringilla at commodo non, pretium id quam. Aliquam dui arcu, tempor mollis libero eget, dignissim ultricies sem. Etiam consectetur sagittis mi, eu venenatis nulla sagittis sit amet. Curabitur posuere sapien ligula, vitae faucibus felis auctor a. Aenean et auctor tellus.
				</p><br/>
				<p>
					Nulla in efficitur libero, id blandit dolor. Sed consequat ligula massa, sit amet tristique libero auctor eu. Nam sem tellus, volutpat sit amet venenatis quis, aliquet auctor risus. Mauris sit amet gravida massa. Fusce a dignissim urna, et tincidunt nibh. Nunc id tellus blandit, ornare enim vitae, posuere nunc. Praesent pharetra mollis turpis quis lacinia. Integer sit amet semper enim, sit amet sagittis diam. Mauris commodo nunc vel leo facilisis luctus. In a efficitur eros. Donec ac sapien in eros efficitur bibendum ut quis erat. Proin faucibus venenatis pulvinar.<br/>
				</p>
			</main>
		</div>
	</body>
</html>