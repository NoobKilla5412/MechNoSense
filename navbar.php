<?php
function active($doc1) {
	global $doc;
	if ($doc === $doc1) {
		echo "<a class=\"nav-link active\" aria-current=\"page\" ";
	}else {
		echo "<a class=\"nav-link\" ";
	}
}
function activeDrop($doc1) {
	global $doc;
	global $subdoc;
	if ($doc === $doc1 || $subdoc === $doc1) {
		echo "<li class=\"dropdown active\">";
	}else {
		echo "<li class=dropdown>";
	}
}
?>
<nav class="navbar navbar-expand-lg navbar-inverse">
	<div class="container-fluid">
		<a href="/" class="navbar-brand">MechNoSense</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li><?php echo active('Home');?>href="/">Home</a></li>
				<li><?php echo active('About Us');?>href="/about-us/">About Us</a></li>
				<li><?php echo active('Workshops');?>href="/workshops/">Workshops</a>
				<li><?php echo active('Daily Log');?>href="/daily-log/">Daily Log</a>
				<li><?php echo active('Sign Up');?>href="/signup/">Sign Up</a>
				<li><?php echo active('Videos');?>href="/videos/">Videos</a></li>
				<li><?php echo active('Pictures');?>href="/pics/">Pictures</a></li>
				<li><?php echo active('Buy');?>href="/buy/">Buy</a></li>
				<li><?php echo activeDrop('Sponsors');?>
					<a class="dropdown-toggle" data-toggle="dropdown">
						Sponsors <span class="caret"/>
					</a>
					<ul class="dropdown-menu text-center" style="background-color:#183820;">
						<?php echo active('Sponsors');?><a href="/sponsors/"><b>Sponsors</b></a></li>
						<?php echo active('Sponsors-HP');?><a href="/sponsors/hp">HP</a></li>
						<?php echo active('Sponsors-4H');?><a href="/sponsors/4h">4H</a></li>
						<?php echo active('Sponsors-First');?><a href="/sponsors/first">First Robotics</a></li>
					</ul>
				</li>
				<?php echo activeDrop('Robots');?>
					<a class="dropdown-toggle" data-toggle="dropdown">
						Robots <span class="caret"/>
					</a>
					<ul class="dropdown-menu text-center" style="background-color:#183820;">
						<?php echo active('Robots');?><a href="/robots/"><b>Robots</b></a></li>
						<?php echo active('Robots-Titans');?><a href="/robots/titans#titans">Titans</a></li>
						<?php echo active('Robots-Atlas');?><a href="/robots/atlas#atlas">Atlas</a></li>
					</ul>
				</li>
				<!--<?php echo activeDrop('Buy');?>
					<a class="dropdown-toggle" data-toggle="dropdown">
						Buy <span class="caret"/>
					</a>
					<ul class="dropdown-menu text-center" style="background-color:#183820;">
						<?php echo active('Buy');?><a href="/buy"><b>Buy</b></a></li>
						<?php echo active('Buy-Titans');?><a href="/buy#titans">Titans</a></li>
						<?php echo active('Buy-Atlas');?><a href="/buy#atlas">Atlas</a></li>
					</ul>
				</li>-->
			</ul>
		</div>
	</div>
</nav>
