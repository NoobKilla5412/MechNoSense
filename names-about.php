<?php
$doc = "Workshops";
$url = "localhost";
$username = "root";
$password = "!d[jAtFAb.!6!Wn";
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
        $names[] = `<a href="#{$row["name"]}" class="names-link">{$row["name"]}</a>`;
        ?>
        <?php
            $i++;
        }
        ?>
        <?php
        echo implode(', ',$names). ' | <a href="mailto:contact@mechnosense.org" class="names-link">Our&nbsp;email</a></span>';
        ?>
    </span>
<?php
} else {
    echo "";
}
?>