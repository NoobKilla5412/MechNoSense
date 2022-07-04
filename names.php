<?php
$doc = "Workshops";
$url = "localhost";
$username = "root";
$password = "!d[jAtFAb.!6!Wn";
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
        <?= $row["name"] ?>, 
        <?php
            $i++;
        }
        ?>
    </span>
<?php
} else {
    echo "";
}
?>