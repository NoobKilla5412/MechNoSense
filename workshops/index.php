<?php
/*if (isset($_GET['mode']) && isset($_GET['pwd'])) {
  if ($_GET['mode'] === 'edit' && $_GET['pwd'] === file_get_contents('C:\wamp64\www\editPWD.txt')) {
?>
    <?php
    $url = "localhost";
    $username = "root";
    $password = file_get_contents('C:\wamp64\www\SQLpwd.txt');
    $conn = mysqli_connect($url, $username, $password, "MechNoSense");
    if (!$conn) {
      die('Could not Connect My Sql');
    }
    if (isset($_POST['save']) && isset($_POST['password'])) {
      if ($_POST['password'] === file_get_contents('C:\wamp64\www\editPWD1.txt')) {
        $title = $_POST['title'];
        $info = $_POST['info'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $link = $_POST['link'];
        $sql = "INSERT INTO workshops (title,info,date,time,link) VALUES ('$title','$info','$date','$time','$link')";
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully !";
        } else {
          echo "Error: " . htmlspecialchars($sql) . "\n" . mysqli_error($conn);
        }
        mysqli_close($conn);
      }
    }
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <?php <link rel="stylesheet" href="/style.css">
      <style>
        body{
          background-color: #FFF;
        }
      </style> ?>
    </head>

    <body>
      <form method="post" action="">
        Title:<br>
        <input type="text" name="title" required>
        <br>
        Info:<br>
        <textarea name="info"></textarea>
        <br>
        Date:<br>
        <input type="text" name="date" required>
        <br>
        Time:<br>
        <input type="text" name="time" required>
        <br>
        Link:<br>
        <input type="text" name="link" required>
        <br>
        Password:<br>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" name="save" value="submit">
      </form>
      <a href="/workshops/">Back</a>
    </body>

    </html>
  <?php }
} else {
  */ ?>
<?php
$doc = "Workshops";
$url = "localhost";
$username = "root";
$password = file_get_contents('C:\wamp64\www\SQLpwd.txt');
$conn = mysqli_connect($url, $username, $password, "MechNoSense");
if (!$conn) {
  die('Could not Connect My Sql');
}
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
  <meta name="keywords" content="MechNoSense mechnosense robots robotics robot">
  <link rel="icon" type="image/ico" href="https://mechnosense.org/favicon.ico" />
  <script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script async src="/js.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://mechnosense.org/style.css" />
  <meta name="theme-color" content="#183820">
  <!-- Custom CSS -->
  <title>Workshops &#8211; MechNoSense</title>
</head>

<body>
  <div class="container-fluid">
    <!-- Navbar -->
    <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\navbar.php'; ?>
    <div class="jumbotron text-center">
      <h1 id="title123">
        Workshops
      </h1>
    </div>
    <div id="content">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM workshops");
      ?>
      <?php
      if (mysqli_num_rows($result) > 0) {
      ?>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <div class="box">
            <h3>
              <?= $row["title"]; ?>
            </h3>
            <p>
              <?= $row["info"]; ?>
            </p>
            <p>
              Date: <?= $row["date"]; ?><br>
              Time: <?= $row["time"]; ?>
            </p>
            <p>
              <a href="<?= $row["link"]; ?>">
                <?= $row["title"]; ?>
              </a>
            </p>
          </div>
        <?php
          $i++;
        }
        mysqli_close($conn);
        ?>
        </table>
      <?php
      } else {
        echo "";
      }
      ?>
      <?php /*
      for ($id = 0; $id < 100; $id++) {
        $query1 = mysql_query("select * from workshops where workshops_id=$id", $connection);
        echo '
        <div class="box">
          <h3>
            ' . $row1['workshops_title'] . '
          </h3>
          <p>
            Date: ' . $row1['workshops_date'] . '<br>
            Time: ' . $row1['workshops_time'] . '
          </p>
          <p>
            <a href="' . $row1['workshops_link'] . '">
              ' . $row1['workshops_title'] . '
            </a>
          </p>
        </div>
        ';
      }
      mysql_close($connection); // Closing Connection with Server
      */ ?>
    </div>
  </div>
  <?php include 'C:\wamp64\www\MechNoSense-Website\MechNoSense\footer.php'; ?>
</body>

</html>