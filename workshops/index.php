<?php
$doc = "Workshops";
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
	<script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Bootstrap JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/style.css" />
	<!-- Custom CSS -->
	<title>Workshops &#8211; MechNoSense</title>
</head>

<body>
	<div class="container-fluid">
		<!-- Navbar -->
		<?php include '..\navbar.php'; ?>
		<div class="jumbotron text-center">
			<h1 id="title123">
				Workshops
			</h1>
			<hr />
			<span class="names">Brandon, Liana, Ismael, Dane, Linnaea, Vibhav, Isaac, Grae, Matthew, Will</span>
			<hr />
		</div>
		<div id="content"></div>
		<script>
			// api url
			const api_url =
				"https://employeedetails.free.beeceptor.com/my/api/path";

			// Defining async function
			async function getapi(url) {

				// Storing response
				const response = await fetch(url);

				// Storing data in form of JSON
				var data = await response.json();
				console.log(data);
				if (response) {
					hideloader();
				}
				show(data);
			}
			// Calling that async function
			getapi(api_url);

			// Function to hide the loader
			function hideloader() {
				document.getElementById('loading').style.display = 'none';
			}
			// Function to define innerHTML for HTML table
			function show(data) {
				let tab =
					`<tr>
          <th>Name</th>
          <th>Office</th>
          <th>Position</th>
          <th>Salary</th>
         </tr>`;

				// Loop to access all rows 
				for (let r of data.list) {
					tab += `<tr> 
    <td>${r.name} </td>
    <td>${r.office}</td>
    <td>${r.position}</td> 
    <td>${r.salary}</td>          
</tr>`;
				}
				// Setting innerHTML as tab variable
				document.getElementById("employees").innerHTML = tab;
			}
		</script>
	</div>
</body>

</html>