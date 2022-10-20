<?php
$doc = "Mini-Bot";
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
  <link rel="icon" type="image/ico" href="https://mechnosense.org/favicon.ico" />
  <script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  <link rel="stylesheet" href="https://mechnosense.org/style.css" />
  <meta name="theme-color" content="#183820">
  <!-- Custom CSS -->
  <title>Mini-Bot &#8211; MechNoSense</title>
</head>

<body>
  <script>
    function styleCodeTags() {
      let codeElements = document.querySelectorAll('code')
      codeElements.forEach(element => {
        element.style.color = 'lightgrey'
        // element.style.background = 'grey'
        element.style.fontFamily = 'monospace'
        console.log(element.style.color)
      })
    }
  </script>
  <div class="container-fluid">
    <!-- Navbar -->
    <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\navbar.php'; ?>
    <div class="jumbotron text-center">
      <h1 id="title123">
        Mini-Bot
      </h1>

    </div>
    <h3>
      How to <strike>Make</strike> (Code) a Mini-Bot
    </h3>
    <p>
      Hello and welcome to coding your very first robot, the first part is going to be dedicated to teaching you
      the very basics of the language that you will be coding the robots you make in. The language that we will be
      using is java, if you haven't heard about it just know that some guys made Minecraft using that language.
    </p>
    <p>
      Before we start actually coding the robot we have decided that it would be best to teach you some important
      things about the language and give you some practice on an online platform. There are a couple of things
      that you need to know beforehand about this that I will cover briefly.
    </p>
    <p>
      Java consists of a few things
    </p>
    <ul class="text">
      <li>
        <b>Class:</b> a class is a big group of code, this is where all of your code will be written.
      </li>
      <li>
        <b>Method:</b> a method is a small block of code that can be executed elsewhere in the code, this makes
        it so your code is a lot more legible and efficient.
      </li>
      <li>
        <b>Variable:</b> a variable is used for storing a value. Whether <code>true</code>, <code>false</code> or
        <code>null</code>, <code>17.5</code>, or a complete sentence.
      </li>
    </ul>
    <p>
      In java, you end every sentence with one of two things. At the end of every sentence to tell the computer that the
      sentence is over you put a semicolon (<code>;</code>). However, if it is something that will contain
      code, such as a method or a class you would encompass all of the code with squiggly brackets(<code>{}</code>).
    </p>
  </div>
  <script>
    styleCodeTags()
  </script>
  <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\footer.php'; ?>
</body>

</html>