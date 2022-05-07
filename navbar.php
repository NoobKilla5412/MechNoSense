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
		echo "active\">";
	}else {
		echo "<li class=dropdown>";
	}
}
?>
<!--
href="/buy/">Buy</a></li>
');?>href="/pics/">Pictures</a></li>
;?>href="/videos/">Videos</a></li>
);?>href="/signup/">Sign Up</a>
g');?>href="/daily-log/">Daily Log</a>
s');?>href="/workshops/">Workshops</a>
');?>href="/about-us/">About Us</a></li>
>href="/">Home</a></li>
########################################################
href="/sponsors/"><b>Sponsors</b></a></li>
<a href="/sponsors/hp">HP</a></li>
<a href="/sponsors/4h">4H</a></li>
;?><a href="/sponsors/first">First Robotics</a></li>
########################################################

########################################################
f="/robots/"><b>Robots</b></a></li>
><a href="/robots/titans#titans">Titans</a></li>
<a href="/robots/atlas#atlas">Atlas</a></li>
########################################################

########################################################
 href="/buy"><b>Buy</b></a></li>
');?><a href="/buy#titans">Titans</a></li>
);?><a href="/buy#atlas">Atlas</a></li>
########################################################
-->
<nav class="navbar navbar-expand-lg navbar-inverse" style="background-color: #183820;">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/buy/">Buy</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Dropdown
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled">Disabled</a>
				</li>
			</ul>
			<form class="d-flex" action="/search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav>