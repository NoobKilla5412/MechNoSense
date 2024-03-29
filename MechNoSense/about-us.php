<?php
$doc = "About Us";
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
  <script async src="/js.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://mechnosense.org/style.css" />
  <meta name="theme-color" content="#183820">
  <!-- Custom CSS -->
  <title>About Us &#8211; MechNoSense</title>
</head>

<body>
  <div class="container-fluid">
    <!-- Navbar -->
    <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\navbar.php'; ?>
    <div class="jumbotron text-center">
      <h1 id="title123">
        About Our Team
      </h1>
      <hr />
      <?php /*<span class="names"><a href="#brandon" class="names-link">Brandon</a>, <a href="#ismael" class="names-link">Ismael</a>, <a href="#dane" class="names-link">Dane</a>, <a href="#linnaea" class="names-link">Linnaea</a>, <a href="#vibhav" class="names-link">Vibhav</a>, <a href="#isaac" class="names-link">Isaac</a>, <a href="#grae" class="names-link">Grae</a>, <a href="#matthew" class="names-link">Matthew</a>, <a href="#will" class="names-link">Will</a>, <a href="#linnaea" class="names-link">Linnaea</a> | <a href="mailto:contact@mechnosense.org" class="names-link">Our&nbsp;email</a></span>*/ ?>
      <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\names-about.php'; ?>
      <hr />
    </div>
    <!-- <h2 style="font-size: 200pt;"> -->
    <!-- This is our about page -->
    <!-- </h2> -->
    <h3>Team Biographies:</h3>
    <?php
    $url = "localhost";
    $username = "root";
    $password = file_get_contents('C:\wamp64\www\SQLpwd.txt');
    $conn = mysqli_connect($url, $username, $password, "MechNoSense");
    if (!$conn) {
      die('Could not Connect My Sql');
    }
    $result = mysqli_query($conn, "SELECT * FROM members");

    if (mysqli_num_rows($result) > 0) {
    ?>
      <span class="names">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <h4 id="<?= strtolower($row["name"]) ?>"><?= $row['name'] ?>:</h4>
          <p>
            <?= $row['bio']; ?>
          </p>
          <h5>Contact:</h5>
          <p>
            <?php /* Phone: <a href="tel:<?= $row['phone']; ?>"><?= $row['phone']; ?></a> */ ?>
            Email: <a href="mailto:<?= $row['email']; ?>"><?= $row['email']; ?></a>
          </p>
          <hr>
        <?php
          $i++;
        }
        ?>
        <?php
        ?>
      </span>
    <?php
    } else {
      echo "";
    }
    ?>
    <!--
        <h4>Linnaea:</h4>
        <p id="linnaea">
            I'm the team lead this year and am excited to start off this year with a blast. I'm part of team rocket
            robotics and have been part of this for about three years now. I enjoy managing our repo, making plans, and
            coding. Outside of robotics, I like to Hike, camp, and all things outdoors. I'm a team leader and am strong
            at long-term planning and short-term emergencies. And I really enjoy giving help whenever needed. I've
            enjoyed these three years and am stoked to have another amazing year with team 12110 MechNoSense.
        </p>
        <h4>Liana:</h4>
        <p id="liana">
            I am the creative input for our website, a builder, and I also work on the engineering notebook/note-taking.
            I joined in 2021 as a builder, and I worked on the robot. This year I want to learn more about building, and
            maybe learn about coding. The website is my first big project, and I’m very excited about it.
        </p>
        <h4>Ismael:</h4>
        <p id="ismael">
            I’m Ismael and this is my first year in robotics. I am focusing on coding our robot’s teleop and doing cool
            stuff to put in there like PID and computer vision. I am really excited to learn how to do all this. I am in
            seventh grade and am running out of things to say but just to make it seem like mine is the longest I will
            put this in.
        </p>
        <h4>Dane:</h4>
        <p id="dane">
            I am Dane. I am our head builder and I joined in 2021. I have loved building things all my life. I was also
            the lead builder for last year's robotics challenge (freight frenzy). Probably the biggest reason I joined
            was to pit my hard work against others who also love to build.
        </p>
        <h4>Vibhav:</h4>
        <p id="vibhav">
            I am Vibhav. The co-team leader, and co-lead programmer. I have been doing Robotics for 2+ years now and
            have been programming for most of the time as well. I became interested in Robotics partly because of my
            parents. They are both software engineers and I was very interested in their work. The other part was that I
            had played around with coding for some time and I found that I enjoyed making small games and programs with
            it; so that’s how I became interested in robotics and programming specifically. This year, I am very excited
            to learn more, work harder, and do better!
        </p>
        <h4>Isaac:</h4>
        <p id="isaac">
            My name is Isaac and this is my second season of robotics in this club. I am one of our group's builders but
            I have been working in many areas of robotics this season. I have really enjoyed robotics and I want to show
            its greatness to anyone who wants it. My favorite color is orange, I like robotics and soccer, I'm in middle
            school and pizza is good. Goodbyeeeee.
        </p>
        <h4>Grae:</h4>
        <p id="grae">
            Hi my name is Grae.
        </p>
        <h4>Matthew:</h4>
        <p id="matthew">
            Hi my name is Matthew.
        </p>
        <h4>Will:</h4>
        <p id="will">
            My name is Will I., programmer for team MechNoSense. I was the leader for one of the two sub-teams last
            year: team 13749 atlas. I am currently a midline programmer for MechNoSense, as well as an assistant
            coordinator for MechNoSense.
        </p>
        <h4>Brandon:</h4>
        <p id="brandon">
            Hi, my name is Brandon. I do the coding of this webpage. I drive the robot for the competitions.
        </p>-->
  </div>
  <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\footer.php'; ?>
</body>

</html>