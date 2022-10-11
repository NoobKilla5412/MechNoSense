<?php
if (isset($_GET['q']) && !empty($_GET['q'])) {
  $search = htmlspecialchars($_GET['q']);
} else {
  $search = '';
}
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H9Z681C9TH"></script>
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
  <meta name="description" content="Hello, we are MechNoSense, an FTC robotics team located in Benton County. We work on teaching robotics, business, and programming skills.">
  <meta name="keywords" content="MechNoSense mechnosense robots robotics robot">
  <link rel="icon" type="image/png" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/favicon.min.png">
  <script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script async src="/js.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/style.css" />
  <meta name="theme-color" content="#183820">
  <title><?php if (isset($_GET['q']) && !empty($_GET['q'])) {
            echo 'Search results for ' . $search;
          } else {
            echo 'Search';
          } ?> &#8211; MechNoSense</title>
</head>

<body>
  <div class="container-fluid">
    <!-- Navbar -->
    <?php include 'C:\wamp64\www\MechNoSense\navbar.php'; ?>
    <div class="jumbotron text-center">
      <h1 id="title123">
        Search
      </h1>
      <hr />
      <?php include 'C:\wamp64\www\MechNoSense\names.php'; ?>
    </div>
    <form class="d-flex" action="/search" method="GET">
      <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search" autocomplete="off" value="<?php if (isset($_GET['q'])) {
                                                                                                                                    echo $search;
                                                                                                                                  } ?>">
      <button class="btn btn-outline-success" type="submit">Go</button>
    </form>
    <h3>
      <?php if (isset($_GET['q']) && !empty($_GET['q'])) {
        echo 'Results for ' . $search . ':';
      } ?>
    </h3>
    <?php
    $url = "localhost";
    $username = "root";
    $password = file_get_contents('C:\wamp64\www\SQLpwd.txt');
    $conn = mysqli_connect($url, $username, $password, "MechNoSense");
    if (!$conn) {
      die('Could not Connect My Sql');
    }
    $min_length = 1;
    // you can set minimum length of the query if you want

    if (isset($_GET['q']) && !empty($_GET['q'])) {
      $query = $_GET['q'];
      // gets value sent over search form

      if (strlen($query) >= $min_length) { // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        $query = mysqli_real_escape_string($conn, $query);
        // makes sure nobody uses SQL injection

        $raw_results = mysqli_query($conn, "SELECT * FROM pages
      WHERE (`title` LIKE '%" . $query . "%') OR (`info` LIKE '%" . $query . "%') OR (`text` LIKE '%" . $query . "%')") or die;

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
        if (mysqli_num_rows($raw_results) > 0) { // if one or more rows are returned do following
          echo "<p>" . mysqli_num_rows($raw_results) . " Results";
          while ($results = mysqli_fetch_array($raw_results)) {
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

            echo "<p><h3><a href=\"" . $results['link'] . "\">" . $results['title'] . "</a></h3><p>" . $results['info'] . "</p></p>";
            // posts results gotten from database(title and text) you can also show id ($results['id'])
          }
        } else { // if there is no matching rows do following
          echo "<p>No results</p>";
        }
      } else { // if query length is less than minimum
        echo "<p>Minimum length is " . $min_length . ' character.</p>';
      }
    } else { // if query length is less than minimum
      echo "<p>Minimum length is " . $min_length . ' character.</p>';
    }
    ?>
  </div>
  <?php include 'C:\wamp64\www\MechNoSense\footer.php'; ?>
</body>

</html>