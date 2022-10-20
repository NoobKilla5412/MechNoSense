<?php

function checkPhone($pattern, $number)
{
  if (preg_match($pattern, $number) === 1) {
    return true;
  } else {
    return false;
  }
}

$phone_pattern = "/^[(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4}$/";
$path = "../data.csv";
if (!empty($_POST["first"]) && !empty($_POST["last"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && checkPhone($phone_pattern, $_POST['phone'])) {

  $length_name = strlen($_POST["first"]);

  if ($length_name > 2 && $length_name < 100) {
    $first = $_POST["first"];
  }

  $fh = fopen($path, "a+");
  $string = "\n\"" . strip_tags($first) . "\",\"" . strip_tags($_POST["last"]) . "\",\"" . strip_tags(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL)) . "\",\"" . strip_tags($_POST['phone']) . "\"";
  fwrite($fh, $string); // Write information to the file
  fclose($fh); // Close the file
  header("Location: /signup/");
} else {
  header("Location: /signup/?error=Completely fill out the form.");
}
