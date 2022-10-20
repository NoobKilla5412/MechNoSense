<?php
$url = "localhost";
$username = "root";
$password = file_get_contents('C:\wamp64\www\SQLpwd.txt');
$conn = mysqli_connect($url, $username, $password, "MechNoSense");
if (!$conn) {
  die('Could not Connect My Sql');
}
$names = [];
$result = mysqli_query($conn, "SELECT * FROM members");

if (mysqli_num_rows($result) > 0) {
?>
  <span class="names">
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
    ?>
      <?php
      $names[] = $row["name"];
      ?>
    <?php
      $i++;
    }
    ?>
    <?php
    echo implode(', ', $names);
    ?>
  </span>
<?php
} else {
  echo "";
}
?>