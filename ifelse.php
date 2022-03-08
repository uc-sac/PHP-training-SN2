<?php
$t = date("H");

if ($t < "12") {
  echo "good morning!";
} elseif ($t < "18") {
  echo "good day!";
} else {
  echo "good night!";
}
?>
