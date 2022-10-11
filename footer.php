<div id="footer">
  <?php // include 'C:\wamp64\www\MechNoSense\navbar-bottom.php'; 
  ?>
  <script>
    function offCanvasColor() {
      offCanvasStyle.background = '#363839'
      for (let i = 0; i < navLinks.length; i++) {
        navLinks[i].style.color = '#8c8989'
      }
      for (let b = 0; b < dropdownMenus.length; b++) {
        dropdownMenus[b].style.background = '#363839'
      }
      for (let c = 0; c < dropdownItems.length; c++) {
        dropdownItems[c].style.color = '#8c8989'
      }
      if (document.getElementsByClassName('dropdown-item active')[0]) {
        document.getElementsByClassName('dropdown-item active')[0].style.color = '#FFF';
      }
      document.getElementsByClassName('nav-link active')[0].style.color = '#FFF'
      document.getElementsByClassName('navbar-brand')[1].style.color = 'grey'
    }
  </script>
  <nav class="navbar navbar-lg navbar-dark" style="background-color: #0000;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="navbarSupportedContent" onclick="offCanvasColor()">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <p class="text-center" style="color: #8c8989;">
    <a class="btn" href="#" style="background-color: #000; color: #FFF;">&#9650;</a>
  </p>
  <p style="color: #8c8989;">
    Text&nbsp;number:&nbsp;(541)&nbsp;286-7974
    Email: <a href="mailto:contact@mechnosense.org">contact@mechnosense.org</a>
    YouTube&nbsp;channel: <a href="https://www.youtube.com/channel/UCBLlVrpF1RP2r3pBj7l6z8Q" target="_blank">MechNoSense&nbsp;Robotics</a>
    Buy:&nbsp;<a href="https://www.redbubble.com/shop/ap/109276834?ref=studio-promote">MechNoSense</a>
  </p>
  <br><br id="bottom">
</div>