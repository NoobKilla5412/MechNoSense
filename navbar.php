<?php
function active($doc1) {
	global $doc;
	if ($doc === $doc1) {
		return "active";
	}
}?>
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
							<li class="<?php echo active('Home'); exit;?>" ><a href="/">Home</a></li>
							<li class="" ><a href="about-us">About Us</a></li>
							<li class="" ><a href="workshops">Workshops</a>
							<li class="" ><a href="daily-log">Daily Log</a>
							<li class="" ><a href="signup">Sign Up</a>
							<li class="" ><a href="videos">Videos</a></li>
							<li class="dropdown" >
								<a class="dropdown-toggle" data-toggle="dropdown">
									Sponsors <span class="caret"/>
								</a>
								<ul class="dropdown-menu" style="background-color:#183820;">
									<li class="" ><a href="/sponsors"><b>Sponsors</b></a></li>
									<li class="" ><a href="/sponsors/hp">HP</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown">
									Robots <span class="caret"/>
								</a>
								<ul class="dropdown-menu" style="background-color:#183820;">
									<li class=""><a href="robots"><b>Robots</b></a></li>
									<li class=""><a href="robots/titans#titans">Titans</a></li>
									<li class=""><a href="robots/atlas#atlas">Atlas</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown">
									Buy <span class="caret"/>
								</a>
								<ul class="dropdown-menu" style="background-color:#183820;">
									<li class=""><a href="buy"><b>Buy</b></a></li>
									<li class=""><a href="buy#titans">Titans</a></li>
									<li class=""><a href="buy#atlas">Atlas</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>