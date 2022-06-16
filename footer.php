<?php
function active($doc1)
{
	global $doc;
	if ($doc === $doc1) {
		echo "<a class=\"nav-link active\" aria-current=\"page\" ";
	} else {
		echo "<a class=\"nav-link\" ";
	}
}
function activeDrop($doc1)
{
	global $doc;
	global $subdoc;
	if ($doc === $doc1 || $subdoc === $doc1) {
		echo "active";
	} else {
		echo "";
	}
}
function activeSubDrop($doc1)
{
	global $doc;
	global $subdoc;
	if ($doc === $doc1) {
		echo "active";
	} else {
		echo "";
	}
}
?>
<div id="footer">
    <p class="text-center">
        <a class="btn" href="#" style="background-color: #000; color: #FFF;">^</a>
    </p>
    <p>
        Phone number: <a href="tel:5410000000">(541) 000-0000</a>
        Email: <a href="mailto:contact@mechnosense.org">contact@mechnosense.org</a>
        YouTube channel: <a
            href="https://www.youtube.com/channel/UCBLlVrpF1RP2r3pBj7l6z8Q">MechNoSense&nbsp;Robotics</a>
    </p>
    <?php include 'C:\wamp64\www\MechNoSense\navbar-bottom.php';?>
</div>