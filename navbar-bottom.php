<?php /*
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
}*/
?>
<?php /*
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
*/ ?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0000;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">MechNoSense</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentBottom" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContentBottom">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><?php active("Home"); ?>href="/">Home</a></li>
        <li class="nav-item"><?php active("About Us"); ?>href="/about-us/">About Us</a></li>
        <li class="nav-item"><?php active("Workshops"); ?>href="/workshops/">Workshops</a></li>
        <li class="nav-item"><?php active("Daily Log"); ?>href="/daily-log/">Daily Log</a></li>
        <li class="nav-item"><?php active("Sign Up"); ?>href="/signup/">Sign Up</a></li>
        <li class="nav-item"><?php active("Videos"); ?>href="/videos/">Videos</a></li>
        <li class="nav-item"><?php active("Pictures"); ?>href="/pics/">Pictures</a></li>
        <?php /*<li class="nav-item"><?php active("Buy"); ?>href="https://www.redbubble.com/shop/ap/109276834?ref=studio-promote">Buy</a></li> */ ?>
        <li class="nav-item"><?php active("Mini-Bot"); ?>href="/minibot/">Code Mini-Bots</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php activeDrop("Sponsors"); ?>" href="#" id="navbarDropdown-Sponsors-bottom" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sponsors
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #363839;">
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors"); ?>" href="/sponsors/">Sponsors</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors-HP"); ?>" href="/sponsors/hp">HP</a></li>
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors-4H"); ?>" href="/sponsors/4h">4-H</a></li>
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors-First"); ?>" href="/sponsors/first">First Robotics</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php activeDrop("Robots"); ?>" href="#" id="navbarDropdown-Robots-bottom" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Robots
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #363839;">
            <li><a class="dropdown-item <?php activeSubDrop("Robots"); ?>" href="/robots/">Robots</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item <?php activeSubDrop("Robots-Titans"); ?>" href="/robots/titans">Titans</a></li>
            <li><a class="dropdown-item <?php activeSubDrop("Robots-Atlas"); ?>" href="/robots/atlas">Atlas</a></li>
          </ul>
        </li>
        <?php /*<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #183820;">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>*/ ?>
      </ul>
    </div>
  </div>
</nav>