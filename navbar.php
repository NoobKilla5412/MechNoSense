<?php
function active($doc1) {
	global $doc;
	if ($doc === $doc1) {
		echo "<li class=active>";
	}else {
		echo "<li>";
	}
}
function activeDrop($doc1) {
	global $doc;
	if ($doc === $doc1) {
		echo "<li class=\"dropdown active\">";
	}else {
		echo "<li class=dropdown>";
	}
}
?>
<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#links" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span> <!-- only appears for screen readers -->
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="/" class="navbar-brand">MechNoSense Robotics</a>
					</div>
					<div class="collapse navbar-collapse" id="links">
						<ul class="nav navbar-nav">
							<?php echo active('Home');?><a href="/">Home</a></li>
							<?php echo active('About Us');?><a href="about-us.php">About Us</a></li>
							<?php echo active('Workshops');?><a href="workshops.php">Workshops</a>
							<?php echo active('Daily Log');?><a href="daily-log.php">Daily Log</a>
							<?php echo active('Sign Up');?><a href="signup.php">Sign Up</a>
							<?php echo active('Videos');?><a href="videos.php">Videos</a></li>
							<?php echo activeDrop('Sponsors');?>
								<a class="dropdown-toggle" data-toggle="dropdown">
									Sponsors <span class="caret"/>
								</a>
								<ul class="dropdown-menu" style="background-color:#183820;">
									<?php echo active('Sponsors');?><a href="/sponsors"><b>Sponsors</b></a></li>
									<?php echo active('Sponsors-HP');?><a href="/sponsors/hp.php">HP</a></li>
								</ul>
							</li>
							<?php echo activeDrop('Robots');?>
								<a class="dropdown-toggle" data-toggle="dropdown">
									Robots <span class="caret"/>
								</a>
								<ul class="dropdown-menu" style="background-color:#183820;">
									<?php echo active('Robots');?><a href="robots"><b>Robots</b></a></li>
									<?php echo active('Robots-Titans');?><a href="robots/titans.php#titans">Titans</a></li>
									<?php echo active('Robots-Atlas');?><a href="robots/atlas.php#atlas">Atlas</a></li>
								</ul>
							</li>
							<?php echo activeDrop('Buy');?>
								<a class="dropdown-toggle" data-toggle="dropdown">
									Buy <span class="caret"/>
								</a>
								<ul class="dropdown-menu" style="background-color:#183820;">
									<?php echo active('Buy');?><a href="buy.php"><b>Buy</b></a></li>
									<?php echo active('Buy-Titans');?><a href="buy.php#titans">Titans</a></li>
									<?php echo active('Buy-Atlas');?><a href="buy.php#atlas">Atlas</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>