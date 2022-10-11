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
<script>
  let navLinks;
  let offCanvasStyle;
  let dropdownMenus;
  let dropdownItems;
  setTimeout(() => {
    navLinks = document.getElementsByClassName('nav-link');
    offCanvasStyle = document.getElementById('offcanvas').style;
    dropdownMenus = document.getElementsByClassName('dropdown-menu show');
    dropdownItems = document.getElementsByClassName('dropdown-item');
  }, 200);

  function offCanvasColorNormal() {
    offCanvasStyle.background = '#183820';
    for (let a = 0; a < navLinks.length; a++) {
      navLinks[a].style.color = '#638a67';
    }
    for (let b = 0; b < dropdownMenus.length; b++) {
      dropdownMenus[b].style.background = '#183820';
    }
    for (let c = 0; c < dropdownItems.length; c++) {
      dropdownItems[c].style.color = '#638a67';
    }
    if (document.getElementsByClassName('dropdown-item active')[0]) {
      document.getElementsByClassName('dropdown-item active')[0].style.color = '#FFF';
    }
    document.getElementsByClassName('nav-link active')[0].style.color = '#FFF';
    document.getElementsByClassName('navbar-brand')[1].style.color = '#6fbf72';
  }
</script>
<nav class="navbar navbar-lg navbar-dark">
  <div class="container-fluid" style="justify-content: start; padding-top:0px">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="navbarSupportedContent" style="float: left;" onclick="offCanvasColorNormal()">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h5 style="display: inline;">
      <a class="navbar-brand" href="/" style="color: #6fbf72;">
        <img src="/apple-touch-icon.png" height="40">
        MechNoSense
      </a>
    </h5>
  </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas" style="background-color: #183820;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasHead"><a class="navbar-brand" href="/">MechNoSense</a></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <?php active("Home"); ?>href="/">Home</a>
      </li>
      <li class="nav-item">
        <?php active("About Us"); ?>href="/about-us/">About&nbsp;Us</a>
      </li>
      <li class="nav-item">
        <?php active("Workshops"); ?>href="/workshops/">Workshops</a>
      </li>
      <li class="nav-item">
        <?php active("Daily Log"); ?>href="/daily-log/">Daily&nbsp;Log</a>
      </li>
      <li class="nav-item">
        <?php active("Sign Up"); ?>href="/signup/">Sign&nbsp;Up</a>
      </li>
      <li class="nav-item">
        <?php active("Videos"); ?>href="/videos/">Videos</a>
      </li>
      <li class="nav-item">
        <?php active("Pictures"); ?>href="/pics/">Pictures</a>
      </li>
      <?php /*<li class="nav-item"><?php active("Buy"); ?>href="https://www.redbubble.com/shop/ap/109276834?ref=studio-promote">Buy</a>
      </li> */ ?>
      <li class="nav-item">
        <?php active("Mini-Bot"); ?>href="/minibot/">Code&nbsp;Mini&#8209;Bots</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle collapsed <?php activeDrop("Sponsors"); ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="collapse" data-bs-target="#sponsorsDropdown" aria-expanded="false">
          Sponsors
        </a>
        <div class="collapse" id="sponsorsDropdown">
          <ul class="dropdown-menu show" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors"); ?>" href="/sponsors/">Sponsors</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors-HP"); ?>" href="/sponsors/hp">HP</a></li>
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors-4H"); ?>" href="/sponsors/4h">4-H</a></li>
            <li><a class="dropdown-item <?php activeSubDrop("Sponsors-First"); ?>" href="/sponsors/first">First
                Robotics</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle collapsed <?php activeDrop("Robots"); ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="collapse" data-bs-target="#robotsDropdown" aria-expanded="false">
          Robots
        </a>
        <div class="collapse" id="robotsDropdown">
          <ul class="dropdown-menu show" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item <?php activeSubDrop("Robots"); ?>" href="/robots/">Robots</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item <?php activeSubDrop("Robots-Titans"); ?>" href="/robots/titans">Titans</a></li>
            <li><a class="dropdown-item <?php activeSubDrop("Robots-Atlas"); ?>" href="/robots/atlas">Atlas</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <form class="d-flex" action="/search" method="GET">
      <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-success" type="submit">Go</button>
    </form>
  </div>
</div>